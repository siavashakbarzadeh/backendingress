@extends('../layout/layouts')

@section('subhead')
    <title>CRUD Form - Tinker - Tailwind HTML Admin Template</title>
@endsection

@section('content')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Create {{$pagename}}</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <form id="categories-store" name="categories-store"  action="{{route('sliders-store')}}" class="" method="post">

                @csrf
                <div class="intro-y box p-5">

                    <div>
                        <label for="crud-form-1" class="form-label">Name</label>
                        <input name="name" id="crud-form-1" type="text" class="form-control w-full" placeholder="Input text">
                    </div>
                    <div>
                        <label for="crud-form-1" class="form-label">Nft_id</label>
                        <input name="nft_id" id="crud-form-1" type="text" class="form-control w-full" placeholder="Input text">
                    </div>
                    <div>
                        <label for="crud-form-1" class="form-label">short_description</label>
                        <input name="short_description" id="crud-form-1" type="text" class="form-control w-full" placeholder="Input text">
                    </div>
                    <div>
                        <label for="crud-form-1" class="form-label">long_desc_header</label>
                        <input name="long_desc_header" id="crud-form-1" type="text" class="form-control w-full" placeholder="Input text">
                    </div>
                    <div>
                        <label for="crud-form-1" class="form-label">long_desc_middle</label>
                        <input name="long_desc_middle" id="crud-form-1" type="text" class="form-control w-full" placeholder="Input text">
                    </div>
                    <div>
                        <label for="crud-form-1" class="form-label">long_desc_footer</label>
                        <input name="long_desc_footer" id="crud-form-1" type="text" class="form-control w-full" placeholder="Input text">
                    </div>
                    <div>
                        <label for="crud-form-1" class="form-label">photo</label>
                        <input name="photo" id="crud-form-1" type="text" class="form-control w-full" placeholder="Input text">
                    </div>


                    <div class="text-right mt-5">
                        <button type="reset" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                        <button type="submit" class="btn btn-primary w-24">Save</button>
                    </div>
                </div>
            </form>

            <!-- END: Form Layout -->
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ mix('dist/js/ckeditor-classic.js') }}"></script>
@endsection
