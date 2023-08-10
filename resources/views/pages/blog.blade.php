@extends('layouts/master')

@section('title', 'Blog')

@section('vendor-style')
@endsection

@section('vendor-script')
    <!-- Required vendors -->
     
	<script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
@endsection

@section('page-script')
@endsection

@section('content')
<div class="row">
    <div class="col-xl-3 col-md-3 col-6">
        <div class="card  blog-card">
            <div class="card-body text-center">
                <img src="{{ asset('assets') }}/images/books.png" alt=""> 
                <h4>Education</h4>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-3 col-6">
        <div class="card  blog-card">
            <div class="card-body text-center">
                <img src="{{ asset('assets') }}/images/news.png" alt=""> 
                <h4>News</h4>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-3 col-6">
        <div class="card blog-card ">
            <div class="card-body text-center">
                <img src="{{ asset('assets') }}/images/heart.png" alt=""> 
                <h4>Ranking</h4>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-3 col-6">
        <div class="card  blog-card">
            <div class="card-body text-center">
                <img src="{{ asset('assets') }}/images/file.png" alt=""> 
                <h4>File Manager</h4>
            </div>
        </div>
    </div>
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header border-0">
                <h4 class="heading mb-0 blog-title">Active users</h4>
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="blog-img">
                            <img src="{{ asset('assets') }}/images/blog/professional.jpg" alt="" class="blk-img">
                            <div class="blog-text">
                                <h2>This quote highlights the importance of writing clear.</h2>
                                <img src="{{ asset('assets') }}/images/contacts/pic1.jpg" class="avatar rounded-circle me-2" alt="">
                                <span>Hary in February 05, 2023</span>
                            </div>
                        </div>
                    </div>	
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="blog-post">
                            <div class="post-1">
                                <img src="{{ asset('assets') }}/images/profile/friends/f1.jpg" class="avatar rounded-circle me-2 custome-avatar" alt="">
                                <div class="post-data">
                                    <span class="badge badge-secondary border-0 badge-sm">DESIGNER</span>
                                    <h4><a href="app-profile-2.html">Good programmers write code that humans can understand.</a></h4>
                                    <span><b class="text-primary">Marry</b> in March 05, 2023</span>
                                </div>
                            </div>
                            <div class="post-1">
                                <img src="{{ asset('assets') }}/images/profile/friends/f2.jpg" class="avatar rounded-circle me-2 custome-avatar" alt="">
                                <div class="post-data">
                                    <span class="badge badge-primary border-0 badge-sm">SOFTWARE</span>
                                    <h4><a href="app-profile-2.html">rogramming isn't about what you know; it's about what you can figure out.</a></h4>
                                    <span><b class="text-primary">Harry</b> in April 05, 2023</span>
                                </div>
                            </div>
                            <div class="post-1">
                                <img src="{{ asset('assets') }}/images/profile/friends/f3.jpg" class="avatar rounded-circle me-2 custome-avatar" alt="">
                                <div class="post-data">
                                    <span class="badge badge-warning border-0 badge-sm">MARKTING</span>
                                    <h4><a href="app-profile-2.html">Debugging is like being a detective in a crime movie where you're also the murderer.</a></h4>
                                    <span><b class="text-primary">Honey</b> in April 05, 2023</span>
                                </div>
                            </div>
                            <div class="post-1">
                                <img src="{{ asset('assets') }}/images/profile/friends/f4.jpg" class="avatar rounded-circle me-2 custome-avatar" alt="">
                                <div class="post-data">
                                    <span class="badge badge-success border-0 badge-sm">SOFTWARE</span>
                                    <h4><a href="app-profile-2.html">The best way to predict the future is to invent it.</a></h4>
                                    <span><b class="text-primary">Honey</b> in April 05, 2023</span>
                                </div>
                            </div>
                            <div class="post-1">
                                <img src="{{ asset('assets') }}/images/profile/friends/f2.jpg" class="avatar rounded-circle me-2 custome-avatar" alt="">
                                <div class="post-data">
                                    <span class="badge badge-secondary border-0 badge-sm">HARDWARE</span>
                                    <h4><a href="app-profile-2.html">The best way to predict the future is to invent it.</a></h4>
                                    <span><b class="text-primary">Honey</b> in April 05, 2023</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>	
    </div>
    <div class="col-xl-9 col-lg-7">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header border-0">
                        <h4 class="heading mb-0 blog-title">Active users</h4>
                        <a href="javascript:void(0)" class="btn btn-primary btn-sm">More</a>
                    </div>
                    <div class="card-body pt-0">
                        <div class="blog-img">
                            <img src="{{ asset('assets') }}/images/blog/professional2.jpg" alt="" class="blk-img2">
                            <div class="blog-text">
                                <h2>This quote highlights the importance of writing clear.</h2>
                                <img src="{{ asset('assets') }}/images/contacts/pic1.jpg" class="avatar rounded-circle me-2 small-post" alt="">
                                <span>Hary in February 05, 2023</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="seconday-post">
                                    <img src="{{ asset('assets') }}/images/blog/s1.jpg" alt="">
                                    <div class="post-1">
                                        <div class="post-data">
                                            <span class="badge badge-warning border-0 badge-sm">MARKTING</span>
                                            <h4>Debugging is like being a detective in a crime movie where you're also the murderer.</h4>
                                            <div>
                                                <img src="{{ asset('assets') }}/images/contacts/pic1.jpg" class="avatar rounded-circle me-2 small-post" alt="">
                                                <span><b class="text-primary">Honey</b> in April 05, 2023</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="seconday-post">
                                    <img src="{{ asset('assets') }}/images/blog/s2.jpg" alt="">
                                    <div class="post-1">
                                        <div class="post-data">
                                            <span class="badge badge-primary border-0 badge-sm">MARKTING</span>
                                            <h4>Debugging is like being a detective in a crime movie where you're also the murderer.</h4>
                                            <div>
                                                <img src="{{ asset('assets') }}/images/contacts/pic2.jpg" class="avatar rounded-circle me-2 small-post" alt="">
                                                <span><b class="text-primary">Honey</b> in April 05, 2023</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="seconday-post">
                                    <img src="{{ asset('assets') }}/images/blog/s3.jpg" alt="">
                                    <div class="post-1">
                                        <div class="post-data">
                                            <span class="badge badge-secondary border-0 badge-sm">SOFTWARE</span>
                                            <h4>Debugging is like being a detective in a crime movie where you're also the murderer.</h4>
                                            <div>
                                                <img src="{{ asset('assets') }}/images/contacts/pic1.jpg" class="avatar rounded-circle me-2 small-post" alt="">
                                                <span><b class="text-primary">Lisa</b> in April 05, 2023</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="seconday-post">
                                    <img src="{{ asset('assets') }}/images/blog/s2.jpg" alt="">
                                    <div class="post-1">
                                        <div class="post-data">
                                            <span class="badge badge-info border-0 badge-sm">DESIGNER</span>
                                            <h4>Debugging is like being a detective in a crime movie where you're also the murderer.</h4>
                                            <div>
                                                <img src="{{ asset('assets') }}/images/contacts/pic2.jpg" class="avatar rounded-circle me-2 small-post" alt="">
                                                <span><b class="text-primary">Mona</b> in April 05, 2023</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header border-0">
                        <h4 class="heading mb-0 blog-title">READ MORE</h4>
                        <a href="javascript:void(0)" class="btn btn-primary btn-sm">More</a>
                    </div>
                    <div class="card-body pt-0">
                        <div class="third-post">
                            <img src="{{ asset('assets') }}/images/blog/s3.jpg" alt="">
                            <div class="post-1">
                                <div class="post-data">
                                    <span class="badge badge-secondary border-0 badge-sm">SEO Tools</span>
                                    <h4>Debugging is like being a detective movie where you're also the murderer.</h4>
                                    <div class="mb-2">
                                        <img src="{{ asset('assets') }}/images/contacts/pic1.jpg" class="avatar rounded-circle me-2 small-post" alt="">
                                        <span><b class="text-primary">Lisa</b> in April 05, 2023</span>
                                    </div>
                                    <span>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    </span>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="third-post">
                            <img src="{{ asset('assets') }}/images/blog/s4.jpg" alt="">
                            <div class="post-1">
                                <div class="post-data">
                                    <span class="badge badge-info border-0 badge-sm">SEO Tools</span>
                                    <h4>There are many variations of passages of Lorem Ipsum available.</h4>
                                    <div class="mb-2">
                                        <img src="{{ asset('assets') }}/images/contacts/pic2.jpg" class="avatar rounded-circle me-2 small-post" alt="">
                                        <span><b class="text-primary">Moni</b> in April 05, 2023</span>
                                    </div>
                                    <span>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="third-post">
                            <img src="{{ asset('assets') }}/images/blog/s5.jpg" alt="">
                            <div class="post-1">
                                <div class="post-data">
                                    <span class="badge badge-primary border-0 badge-sm">SEO Tools</span>
                                    <h4>Debugging is like being a detective movie where you're also the murderer.</h4>
                                    <div class="mb-2">
                                        <img src="{{ asset('assets') }}/images/contacts/pic3.jpg" class="avatar rounded-circle me-2 small-post" alt="">
                                        <span><b class="text-primary">Lisa</b> in April 05, 2023</span>
                                    </div>
                                    <span>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    </span>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="third-post">
                            <img src="{{ asset('assets') }}/images/blog/s6.jpg" alt="">
                            <div class="post-1">
                                <div class="post-data">
                                    <span class="badge badge-warning border-0 badge-sm">SEO Tools</span>
                                    <h4>Contrary to popular belief, Lorem Ipsum is not simply random text.</h4>
                                    <div class="mb-2">
                                        <img src="{{ asset('assets') }}/images/contacts/pic1.jpg" class="avatar rounded-circle me-2 small-post" alt="">
                                        <span><b class="text-primary">Moni</b> in April 05, 2023</span>
                                    </div>
                                    <span>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="col-xl-3 col-lg-5">
        <div class="card-header border-0 pt-0 px-0">
            <h4 class="heading mb-0 blog-title">Popular posts</h4>
        </div>
        <div class="recent-post">
            <div class="blog-img style-1">
                <img src="{{ asset('assets') }}/images/blog/professional.jpg" alt="" class="blk-img">
                <div class="blog-text">
                    <span class="badge badge-info border-0 badge-sm mb-2">DESIGNER</span>
                    <h2>This quote highlights the importance of writing clear.</h2>
                    <img src="{{ asset('assets') }}/images/contacts/pic1.jpg" class="avatar rounded-circle me-2" alt="">
                    <span>Hary in February 05, 2023</span>
                </div>
            </div>
            <div class="third-post style-1">
                <img src="{{ asset('assets') }}/images/blog/s3.jpg" alt="">
                <div class="post-1">
                    <div class="post-data">
                        <h4>Debugging is like being</h4>
                        <div class="mb-2">
                            <img src="{{ asset('assets') }}/images/contacts/pic1.jpg" class="avatar rounded-circle me-2 small-post" alt="">
                            <span> April 05, 2023</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="third-post style-1">
                <img src="{{ asset('assets') }}/images/blog/s1.jpg" alt="">
                <div class="post-1">
                    <div class="post-data">
                        <h4>Debugging is like being</h4>
                        <div class="mb-2">
                            <img src="{{ asset('assets') }}/images/contacts/pic2.jpg" class="avatar rounded-circle me-2 small-post" alt="">
                            <span> April 05, 2023</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="third-post style-1">
                <img src="{{ asset('assets') }}/images/blog/s3.jpg" alt="">
                <div class="post-1">
                    <div class="post-data">
                        <h4>It is a long established fact that a reader wil</h4>
                        <div class="mb-2">
                            <img src="{{ asset('assets') }}/images/contacts/pic2.jpg" class="avatar rounded-circle me-2 small-post" alt="">
                            <span> April 05, 2023</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-header border-0 pt-0 px-0">
            <h4 class="heading mb-0 blog-title">Social plugin</h4>
        </div>
        <div class="mb-4">
            <ul class="c-social">
                <li><a href="javascript:void(0);" class="bg-facebook"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="javascript:void(0);" class="bg-whatsapp"><i class="fa-brands fa-whatsapp"></i></a></li>
                <li><a href="javascript:void(0);" class="bg-linkedin"><i class="fa-brands fa-linkedin-in"></i></a></li>
                <li><a href="javascript:void(0);" class="bg-skype"><i class="fa-brands fa-skype"></i></a></li>
            </ul>
        </div>
        <div class="card h-auto notifiy">
            <div class="card-body">
                <div class="icon-box icon-box-sm bg-primary">
                    <i class="fa-solid fa-bell text-white"></i>
                </div>
                <div class="notify-data">
                    <h6>Follow by Email</h6>
                    <span>Get Notified About Next Update Direct to Your inbox</span>
                    <form>
                        <div class="mt-3">
                          <input type="email" class="form-control form-control-sm" id="exampleInputEmail1" placeholder="Enter Email">
                          <a href="javascript:void(0)" class="btn btn-primary btn-sm  d-block mt-3">subscribe</a>
                        </div>
                    </form>	
                </div>	
            </div>
        </div>
        <div class="recent-post">
            <div class="card-header border-0 pt-0 px-0">
                <h4 class="heading mb-0 blog-title">websites</h4>
            </div>
            <div class="third-post style-1">
                <img src="{{ asset('assets') }}/images/blog/s3.jpg" alt="">
                <div class="post-1">
                    <div class="post-data">
                        <h4>Debugging is like being</h4>
                        <div class="mb-2">
                            <span> April 05, 2023</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="third-post style-1">
                <img src="{{ asset('assets') }}/images/blog/s1.jpg" alt="">
                <div class="post-1">
                    <div class="post-data">
                        <h4>Debugging is like being</h4>
                        <div class="mb-2">
                            <span> April 05, 2023</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="third-post style-1">
                <img src="{{ asset('assets') }}/images/blog/s3.jpg" alt="">
                <div class="post-1">
                    <div class="post-data">
                        <h4>It is a long established fact that a reader wil</h4>
                        <div class="mb-2">
                            <span> April 05, 2023</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="recent-post">
            <div class="card-header border-0 pt-0 px-0">
                <h4 class="heading mb-0 blog-title">Comments</h4>
            </div>
            <div class="third-post style-2">
                <img src="{{ asset('assets') }}/images/contacts/pic1.jpg" class="avatar  rounded-circle me-2 av-post" alt="">
                <div class="post-1">
                    <div class="post-data">
                        <h4 class="mb-0">James Marry</h4>
                        <div class="">
                            <span> This is Nice!!</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="third-post style-2">
                <img src="{{ asset('assets') }}/images/contacts/pic2.jpg" class="avatar  rounded-circle me-2 av-post" alt="">
                <div class="post-1">
                    <div class="post-data">
                        <h4 class="mb-0">Robert Patricia</h4>
                        <div class="">
                            <span> This is Coments!!</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="third-post style-2">
                <img src="{{ asset('assets') }}/images/contacts/pic3.jpg" class="avatar  rounded-circle me-2 av-post" alt="">
                <div class="post-1">
                    <div class="post-data">
                        <h4 class="mb-0">John Jennifer</h4>
                        <div class="">
                            <span> This is Coments!!</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection