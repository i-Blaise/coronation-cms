                            <div class="card-body">
                                {{-- <form> --}}

                                    <div class="form-row">
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2">
                                            <label for="exampleFormControlTextarea1">Caption</label>
                                            @include('components.forms.tinymce-editor')
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2">
                                            <label for="exampleFormControlTextarea1">Body</label>
                                            @include('components.forms.tinymce-editor')
                                        </div>

                                        {{-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                            <button class="btn btn-primary" type="submit">Submit</button>
                                        </div>
                                    </div> --}}

                                {{-- </form> --}}
                            </div>
