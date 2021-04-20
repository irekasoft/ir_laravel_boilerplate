<div class="admin-navbar" >
<div style="display:flex;flex-direction:row;justify-content:center;align-items:center; " >

@isset ($back_url)
  <a href="{{ $back_url }}" style="text-decoration:none;margin-top:-2px; margin-left:-12px; font-size:14px;backgroud-color:'black',width:40,">
    <i class="bi bi-chevron-left"></i>
     Back</a>
  <div style="width:8px"></div>
@endisset

@isset($title)
<span class="d-none d-md-block" style="font-size:16px;">{{ $title }}</span>
<span class="d-block d-md-none" style="font-size:14px;">{{ $title }}</span>
@endisset

</div>

@isset ($right_comp)
  <div style="margin-top:-2px;">
    {{ $right_comp }}
  </div>
@endisset

</div>

<div style="height:50px;"></div>
