
# 1- Build the project :
- `docker-compose build`
- `docker-compose up`

# 2-Setup the database :
- `docker exec -it dazl-mysql bash`
- create a database name it `dazl`

# 3-Essential commands to run in the backend container
- `php artisan migrate`
- `php artisan db:seed`
- `php artisan passport:install`
- `php artisan key:generate`
- `php artisan jwt:secret`

# 4-Run the project
- Just visit `http://localhost:5000/admin/login`
- Email : `admin@admin.com`
- Password : `secret`

# Module generator
    - php artisan add:module ModuleName
    - edit migration file & seeder and model for new module and views
    - php artisan migrate


# Run Tests
    -./runTests --filter it_should_test_dummy_test
    -./runTests

#Documentation
    - php artisan apidoc:generate
    - Access Documentation by simple hitting this url : http://localhost:5000/doc
    
    test

