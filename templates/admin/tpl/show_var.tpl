<{if $isAdmin and $show_var}>
  <style>
    .show_var .red{color:red;}
    .show_var .title{background-color:#64FA74;color:block;font-weight: bold;text-align:center;}
  </style>
  <!-- &lt;{}&gt; -->
  <div style="background-color:#D2C7C7">
    <table class="table table-striped table-bordered table-hover show_var"> 

      <thead>
        <tr>
          <th colspan=3 class="title">佈景變數</th>
        </tr>
        <tr>
          <th>標籤 </th>
          <th>說明</th>
          <th>值</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>&lt;{xoAppUrl}&gt;</td>
          <td>網站目錄</td>
          <td><{xoAppUrl}></td>
        </tr>
        <tr>
          <td>&lt;{xoImgUrl}&gt;</td>
          <td>佈景目錄</td>
          <td><{xoImgUrl}></td>
        </tr>
        <tr>
          <td>&lt;{$op}&gt;</td>
          <td>流程op</td>
          <td><{$op}></td>
        </tr>
        <{foreach from=$WEB item=row key=k}>
          <tr>
            <td>&lt;{$WEB.<{$k}>}&gt;</td>
            <td><{$k}></td>
            <td><{$row}></td>
          </tr>
        <{/foreach}>
      </tbody>

    </table>
    
  </div>
<{/if}>