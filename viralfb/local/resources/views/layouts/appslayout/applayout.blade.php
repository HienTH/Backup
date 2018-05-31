{{--*/ $image = str_replace('\\', '/', $aplicatie->img) /* --}}
<div class="col-sm-6 col-md-4">
   <div class="new-app-container">
       <div class="newa-background"><img src="{{ url("$image") }}"></div>
       <div class="newa">
           <div class="new-app-description">
               <span class="appstitle">{{ $aplicatie->title }}</span>
               <div class="newap-btn">
                   <div onclick="window.location='{{ url("/$aplicatie->appname") }}'" class="move">{{ $lang['letsdoit'] }} &nbsp;<i
                               class="fa fa-chevron-right" aria-hidden="true"></i>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>

