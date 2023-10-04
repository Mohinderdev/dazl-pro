@push('scripts')
	<script type="text/javascript">

		@if (session()->has('success'))
			toastr.success("{{ session()->get('success') }}");
		@elseif (session()->has('failed'))
			toastr.error("{{ session()->get('failed') }}", "Error");
		@elseif (session()->has('notice'))
			toastr.warning("{{ session()->get('notice') }}");
		@elseif (session()->has('status'))
			toastr.info("{{ session()->get('status') }}");
		@endif

	</script>

@endpush
