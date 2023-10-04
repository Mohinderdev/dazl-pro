<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class NewModule extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:module {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'add new module';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $src = base_path('app/Modules/BaseModule') ;
        $dst = base_path('app/Modules/').$this->argument('name');
        $this->recurse_copy($src, $dst);

        $this->configModel($this->argument('name'));
        $this->renameController($dst, $this->argument('name'));
        $this->changeRoutesValues($dst, $this->argument('name'));
        $this->changeResourcesValues($dst, $this->argument('name'));
        $this->setModuleAppConfig($this->argument('name'));
        $this->setSeeder($this->argument('name'));
        $this->configMenu($this->argument('name'));
        echo $this->argument('name')." Module added successfully "."\n";
    }

    public function configMenu($name)
    {
        $srcMenu = base_path('resources/views/admin/layouts/sidebar.blade.php') ;
        $name_with_dash = strtolower(preg_replace('/\B([A-Z])/', '-$1', $name));
        $name_with_space = strtolower(preg_replace('/\B([A-Z])/', ' $1', $name));
        $str = file_get_contents($srcMenu);
        $str = str_replace("<!-- add new module -->", '<li class="kt-menu__item " aria-haspopup="true">
                    <a href="{{ route("'.$this->convertToPluralWord($name_with_dash).'.index") }}" class="kt-menu__link">
                        <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                        <span class="kt-menu__link-text"> '.$this->convertToPluralWord($name_with_space).' </span>
                    </a>
                </li>
                <!-- add new module -->', $str);
        $this->SetContent($srcMenu, $str);
    }

    public function configModel($name)
    {
        $srcModel = base_path('app/Modules/BaseModule/Models') ;
        $dstModel = base_path('app/Modules/').$this->argument('name')."/Models";
        $this->recurse_copy($srcModel, $dstModel);
        rename($dstModel."/BaseModule.php", $dstModel."/".$this->convertUnderscoresToUppercase(ucfirst($name)).".php");
        $this->changeFileValue($dstModel."/".$this->convertUnderscoresToUppercase(ucfirst($name)).".php", $name);
    }

    public function setModuleAppConfig($name)
    {
        $ucfirestName = $this->convertUnderscoresToUppercase(ucfirst($name));
        $str = file_get_contents(base_path('config/app.php'));
        $str = str_replace("// add new module", "App\Modules\\".$ucfirestName."\Providers\\".$ucfirestName."ServiceProvider::class,
        // add new module ", $str);
        $this->SetContent(base_path('config/app.php'), $str);
    }

    public function setSeeder($name)
    {
        $ucfirestName = $this->convertUnderscoresToUppercase(ucfirst($name));
        $str = file_get_contents(base_path('database/seeds/DatabaseSeeder.php'));
        $str = str_replace("// add new module", "\$this->call(".$ucfirestName."Seeder::class);
        // add new module ", $str);
        $this->SetContent(base_path('database/seeds/DatabaseSeeder.php'), $str);
    }

    public function changeFileValue($dst, $name)
    {
        $UcfirestName = ucfirst($name);
        $LcfirestName = $this->convertUnderscoresToUppercase(lcfirst($name));
        $name_with_dash = strtolower(preg_replace('/\B([A-Z])/', '-$1', $name));
        $name_with_under_score = strtolower(preg_replace('/\B([A-Z])/', '_$1', $name));
        $name_with_spaces = strtolower(preg_replace('/\B([A-Z])/', ' $1', $name));

        //read the entire string
        $str = file_get_contents($dst);
        //replace something in the file string
        $str = str_replace("BaseModules", $this->convertToPluralWord($this->convertUnderscoresToUppercase($UcfirestName)), $str);
        $str = str_replace("base-modules", $this->convertToPluralWord($name_with_dash), $str);
        $str = str_replace("base_modules", $this->convertToPluralWord($name_with_under_score), $str);
        $str = str_replace("base modules", $this->convertToPluralWord($name_with_spaces), $str);

        $str = str_replace("BaseModule", $this->convertUnderscoresToUppercase($UcfirestName), $str);
        $str = str_replace("base-module", $name_with_dash, $str);
        $str = str_replace("base_module", $name_with_under_score, $str);
        $str = str_replace("base module", $name_with_spaces, $str);
        // set new string
        $this->SetContent($dst, $str);
    }

    public function SetContent($path, $str)
    {
        $File = fopen($path, "w") or die("Unable to open file!");
        fwrite($File, $str);
        fclose($File);
    }

    public function changeRoutesValues($dst, $name)
    {
        $this->changeFileValue($dst."/Routes/api.php", $name);
        $this->changeFileValue($dst."/Routes/web.php", $name);
    }

    public function changeResourcesValues($dst, $name)
    {
        $this->changeFileValue($dst."/Resources/views/actions.blade.php", $name);
        $this->changeFileValue($dst."/Resources/views/create.blade.php", $name);
        $this->changeFileValue($dst."/Resources/views/edit.blade.php", $name);
        $this->changeFileValue($dst."/Resources/views/form.blade.php", $name);
        $this->changeFileValue($dst."/Resources/views/index.blade.php", $name);
    }

    public function renameController($dst, $name)
    {
        $UcfirestName = ucfirst($name);
        $LcfirestName = $this->convertUnderscoresToUppercase(lcfirst($name));

        // controller for admin and api
        $this->renameControllers($dst, $UcfirestName);
        // database file and seeder
        $this->renameDatabase($dst, $UcfirestName, $LcfirestName);
        // Features for admin and api
        $this->renameFeatures($dst, $UcfirestName);
        // service provider
        rename($dst."/Providers/BaseModuleServiceProvider.php", $dst."/Providers/".$UcfirestName."ServiceProvider.php");
        $this->changeFileValue($dst."/Providers/".$UcfirestName."ServiceProvider.php", $UcfirestName);
        $this->changeFileValue($dst."/Providers/RouteServiceProvider.php", $UcfirestName);

        // requests
        $this->renameRequests($dst, $UcfirestName);
        // Transformers
        $this->renameTransformers($dst, $UcfirestName);
    }

    public function renameControllers($dst, $UcfirestName)
    {
        rename($dst."/Controllers/Admin/BaseModuleController.php", $dst."/Controllers/Admin/".$UcfirestName."Controller.php");
        rename($dst."/Controllers/Api/BaseModuleController.php", $dst."/Controllers/Api/".$UcfirestName."Controller.php");

        $this->changeFileValue($dst."/Controllers/Admin/".$UcfirestName."Controller.php", $UcfirestName);
        $this->changeFileValue($dst."/Controllers/Api/".$UcfirestName."Controller.php", $UcfirestName);
    }

    public function renameDatabase($dst, $UcfirestName, $LcfirestName)
    {
        $date = date('Y_m_d', strtotime('now')) . '_' . (strtotime('now'));
        rename($dst."/Database/migrations/2019_09_01_145743_create_base_module_table.php", $dst."/Database/migrations/_create_" . $LcfirestName. "_table.php");
        rename($dst."/Database/seeds/BaseModuleSeeder.php", $dst."/Database/seeds/".$UcfirestName."Seeder.php");
        $this->changeFileValue($dst."/Database/seeds/".$UcfirestName."Seeder.php", $UcfirestName);
        $this->changeFileValue($dst."/Database/migrations/_create_" . $LcfirestName. "_table.php", $UcfirestName);
        rename($dst."/Database/migrations/_create_" . $LcfirestName. "_table.php", $dst."/Database/migrations/". $date ."_create_" . $LcfirestName. "_table.php");
    }

    public function renameFeatures($dst, $UcfirestName)
    {
        rename($dst."/Features/Admin/CreateBaseModuleFeature.php", $dst."/Features/Admin/Create".$UcfirestName."Feature.php");
        rename($dst."/Features/Admin/DeleteBaseModuleFeature.php", $dst."/Features/Admin/Delete".$UcfirestName."Feature.php");
        rename($dst."/Features/Admin/EditBaseModuleFeature.php", $dst."/Features/Admin/Edit".$UcfirestName."Feature.php");
        rename($dst."/Features/Admin/StoreBaseModuleFeature.php", $dst."/Features/Admin/Store".$UcfirestName."Feature.php");
        rename($dst."/Features/Admin/UpdateBaseModuleFeature.php", $dst."/Features/Admin/Update".$UcfirestName."Feature.php");
        rename($dst."/Features/Admin/JsonBaseModulesFeature.php", $dst."/Features/Admin/Json".$this->convertToPluralWord($UcfirestName)."Feature.php");
        rename($dst."/Features/Admin/ListBaseModulesFeature.php", $dst."/Features/Admin/List".$this->convertToPluralWord($UcfirestName)."Feature.php");
        rename($dst."/Features/Api/ListBaseModulesFeature.php", $dst."/Features/Api/List".$this->convertToPluralWord($UcfirestName)."Feature.php");

        $this->changeFileValue($dst."/Features/Admin/Create".$UcfirestName."Feature.php", $UcfirestName);
        $this->changeFileValue($dst."/Features/Admin/Delete".$UcfirestName."Feature.php", $UcfirestName);
        $this->changeFileValue($dst."/Features/Admin/Edit".$UcfirestName."Feature.php", $UcfirestName);
        $this->changeFileValue($dst."/Features/Admin/Store".$UcfirestName."Feature.php", $UcfirestName);
        $this->changeFileValue($dst."/Features/Admin/Update".$UcfirestName."Feature.php", $UcfirestName);
        $this->changeFileValue($dst."/Features/Admin/Json".$this->convertToPluralWord($UcfirestName)."Feature.php", $UcfirestName);
        $this->changeFileValue($dst."/Features/Admin/List".$this->convertToPluralWord($UcfirestName)."Feature.php", $UcfirestName);
        $this->changeFileValue($dst."/Features/Api/List".$this->convertToPluralWord($UcfirestName)."Feature.php", $UcfirestName);
    }

    public function renameRequests($dst, $UcfirestName)
    {
        rename($dst."/Requests/Admin/CreateBaseModuleRequest.php", $dst."/Requests/Admin/Create".$UcfirestName."Request.php");
        rename($dst."/Requests/Admin/UpdateBaseModuleRequest.php", $dst."/Requests/Admin/Update".$UcfirestName."Request.php");
        $this->changeFileValue($dst."/Requests/Admin/Create".$UcfirestName."Request.php", $UcfirestName);
        $this->changeFileValue($dst."/Requests/Admin/Update".$UcfirestName."Request.php", $UcfirestName);
    }

    public function renameTransformers($dst, $UcfirestName)
    {
        rename($dst."/Transformers/Api/BaseModuleCollection.php", $dst."/Transformers/Api/".$UcfirestName."Collection.php");
        rename($dst."/Transformers/Api/BaseModuleResource.php", $dst."/Transformers/Api/".$UcfirestName."Resource.php");
        $this->changeFileValue($dst."/Transformers/Api/".$UcfirestName."Collection.php", $UcfirestName);
        $this->changeFileValue($dst."/Transformers/Api/".$UcfirestName."Resource.php", $UcfirestName);
    }

    public function recurse_copy($src, $dst)
    {
        $dir = opendir($src);
        @mkdir($dst);
        while (false !== ($file = readdir($dir))) {
            if (($file != '.') && ($file != '..')) {
                if (is_dir($src . '/' . $file)) {
                    $this->recurse_copy($src . '/' . $file, $dst . '/' . $file);
                } else {
                    copy($src . '/' . $file, $dst . '/' . $file);
                }
            }
        }
        closedir($dir);
    }

    public function convertToPluralWord($string)
    {
        return substr($string, -1) == 's' ? $string :
            (substr($string, -1) == 'y' ? rtrim($string, 'y') . 'ies' :
                (substr($string, -1) == 'a' ? $string : $string . 's'));
    }

    public function convertUnderscoresToUppercase($string, $delimiter = '_', $with = '')
    {
        $items = explode('_', $string);
        $str = "";
        foreach ($items as $key => $item) {
            if ($key == 0) {
                $str .= $item;
            } else {
                $str .= $with.ucfirst($item);
            }
        }
        return $str;
    }
}
