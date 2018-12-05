<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<div class="nav-side-menu">
    <div class="brand">{{$username->name}}</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

        <div class="menu-list">

            <ul id="menu-content" class="menu-content collapse out">
              @auth
              <li>
               <div onclick="location.href='/admin/cv'" style="background-color:grey">
               <i class="fa fa-tachometer"></i> Go to admin interface
             </div>
               </li>
              @endauth

                <li>
                  <div onclick="location.href='/'">
                  <i class="fa fa-user fa-lg"></i> Cv
                </div>
                </li>

                 <li>
                  <div onclick="location.href='/worksgallarey'">
                  <i class="fa fa-gift fa-lg"></i> Worksgallarey
                </div>
                  </li>

                  <li>
                   <div onclick="location.href='/blog'">
                   <i class="fa fa-book fa-lg"></i> Blog
                 </div>
                   </li>

                   <li  data-toggle="collapse" data-target="#questions" class="collapsed active">
                     <a><i class="fa fa-question fa-lg"></i> Questions <span class="arrow"></span></a>
                   </li>
                   <ul class="sub-menu collapse" id="questions">
                     <li onclick="location.href='/questions/ask'"><a>Ask</a></li>
                     <li onclick="location.href='/questions/answerd'"><a>Answerd questions</a></li>
                   </ul>


            </ul>
     </div>
</div>
