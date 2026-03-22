@extends('layouts.app')
@section('content')
    <div class="navbar two-action no-hairline">
    <div class="navbar-inner d-flex align-items-center">
        <div class="left">
            <a href="#" class="link icon-only">
                <i class="custom-hamburger">
                    <span><b></b></span>
                </i>
            </a>
        </div>
        <div class="sliding custom-title">{{$category->name}} : SubCategories</div>
        <div class="right d-flex">
            <a href="javascript:void(0)" onClick="openAdd()" class="link icon-only" title="Add Category"><i class="material-icons">add</i></a>
            <a href="#" data-bs-toggle="dropdown" aria-expanded="true" class="link"><i class="material-icons">more_vert</i></a>
            @include('layouts.navigation')
        </div>
    </div>
</div> 
    <div class="chat-list-new">
        <div class="container">
        <!-- Pages -->
        <div class="social-media-col pages-list-col">         
                     <div class="chat-title">
                        <div class="chat-list-title">
                            <i><a href="{{url('/categories')}}" class="back link">
                                <img src="{{asset('assets/img/left-arrow-big-black.svg')}}" alt=""></a>
                            </i> Back
                        </div>
                           
                        <div class="user">{{count($subcategories)}} Sub Categories</div>
                    </div>
                   
                    <!-- Searchbar with auto Search -->
                    <form class="searchbar">
                        <div class="search_chat has-search">
                            <span class="fas fa-search form-control-feedback"></span>
                            <input class="form-control chat_input" id="search-chat" type="text" placeholder="">
                        </div>
                    </form>
                    <!-- Searchbar with auto Search end -->
                <div class="list">
                    <ul>
                        @foreach($subcategories as $cat)
                        <li>
                            <span class="item-link item-content">
                                <div class="item-avatar">
                                    <span class="material-icons">pages</span>
                                </div>
                                <div class="item-cat">
                                    <div class="item-title">
                                        <a href="{{url('sub-categories/'.$cat->id)}}">{{$cat->name}}</a>
                                    </div>
                                </div>
                                <div class="right d-flex">                    
                                    <a href="#" data-bs-toggle="dropdown" aria-expanded="true" class="link">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end header_drop_icon">
                                        <a href="javascript:void(0)" onClick="openEdit({{$cat}})" class="dropdown-item">Edit</a>
                                        <a href="{{url('/sub-category/delete/'.$cat->id)}}" class="dropdown-item">Delete</a>
                                    </div>
                                </div>
                            </span>
                        </li>
                        @endforeach
                                           
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Pages -->
        <!-- Category popup -->
                <div class="modal fade" id="zone-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-widget-title title">Add Location</h5>
                                <a class="link popup-close close popup-close-right" href="#" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </a>
                            </div>
                            <div class="modal-body">
                                <div class="popup custom-filter-popup">
                                    <div class="setting-widget">
                                        <div class="list no-hairlines-md">         
                                            <!-- <div class="file-upload">
                                                <a href="#" class="file-upload-img">
                                                    <img src="assets/img/doctors/doctor-thumb-02.jpg" class="img-fluid img-circle" width="85" alt="User Image">
                                                    <span class="cam-icon"><img src="assets/img/placeholder-small.svg" alt=""></span>
                                                </a>
                                            </div> -->
                                           <form action="{{url('/store-subcategories')}}" method="post"  enctype="multipart/form-data">
                                                @csrf
                                                <ul><li>
                                                    <div class="file-upload">
                                                        <img id="output" src="assets/img/doctors/doctor-thumb-02.jpg" class="img-fluid img-circle file-upload-img" width="300" height="300" alt="User Image">
                                                    
                                                    <input type="file"  name="image" accept="image/*" onchange="loadFile(event)"  />
                                                    <span class="input-clear-button"></span>
                                                    </div>
                                                </li>
                                                </ul>
                                                <input type="hidden" id="zone_id" name="id" />
                                                 <ul>
                                                    <li class="item-content item-input">
                                                        <div class="item-col">
                                                            <div class="item-title item-label">Category Name <span>*</span></div>
                                                            <div class="item-input-wrap">
                                                                <input type="text" placeholder="{{$category->name}}"  disabled>
                                                                <span class="input-clear-button"></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item-content item-input">
                                                        <div class="item-col">
                                                            <div class="item-title item-label">Sub Category Name <span>*</span></div>
                                                            <div class="item-input-wrap">
                                                                <input type="text" id="subcategory" name="subcategory" required>
                                                                <input type="hidden" name="category" value="{{$category->id}}">
                                                                <span class="input-clear-button"></span>
                                                            </div>
                                                        </div>
                                                    </li> 
                                                    <li class="item-content-full item-input">
                                                    <div class="item-col">
                                                        <div class="item-title item-label">How it Works?</div>
                                                        <div class="item-input-wrap">
                                                            <div 
                                                                id="desc"
                                                                required
                                                                name="description"
                                                             placeholder="CCTV installation and repair service, with assured quality standards">
</div>
                                                        </div>
                                                    </div>
                                                </li>                                            
                                                    
                                                    <li class="bottom-button">
                                                        <button class="btn addZoneBtn">Add Sub Category</button>
                                                    </li>
                                                </ul>
                                            
											  	
										  	</form>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- /Add Category popup -->
    </div>

    

@endsection
@section('customScript')

<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>

<!-- Bootstrap Core JS -->
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

<!-- Custom JS -->
<script src="{{asset('assets/js/script.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
<link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
<script>

    const initialData = {
  name: 'Wall-E',
  location: 'Earth',
  // `about` is a Delta object
  // Learn more at: https://quilljs.com/docs/delta
  about: [
    {
      insert:
        'A robot who has developed sentience, and is the only robot of his kind shown to be still functioning on Earth.\n',
    },
  ],
};

const quill = new Quill('#desc', {
  modules: {
    toolbar: [
      ['bold', 'italic'],
      ['link', 'blockquote', 'code-block', 'image'],
      [{ list: 'ordered' }, { list: 'bullet' }],
    ],
  },
  theme: 'snow',
});
function openEdit (item){
    //console.log(item,'item');
    $('#zone-modal').modal('show');
    $('#zone_id').val(item.id);
    $('.title').html('Edit Sub Category');
    $('.addZoneBtn').html('Update Sub Category');
    $('#subcategory').val(item.name);
    $('#desc').html(item.description);
    //initialData.location;
    //quill.setContents(item.description);
    var output = document.getElementById('output');
    output.src = item.image;
}
function openAdd (){
   // console.log(item,'item');
    $('#zone-modal').modal('show');
    $('#zone_id').val('');
    $('.title').html('Add Sub Category');
    $('.addZoneBtn').html('Add Sub Category');
    $('#subcategory').val('');
    $('#desc').val('');
    var output = document.getElementById('output');
    output.src = 'assets/img/doctors/doctor-thumb-02.jpg';
}
var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>

@endsection