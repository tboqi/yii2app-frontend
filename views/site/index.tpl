{{extends file='../layout.tpl'}}
{{block name=title}}我的页面标题{{/block}}
{{block name=head}}
  <link href="/css/mypage.css" rel="stylesheet" type="text/css"/>
  <script src="/js/mypage.js"></script>
{{/block}}
{{block name=body}}我的HTML页面内容在这里
<br>
{{$test}}
{{/block}}

