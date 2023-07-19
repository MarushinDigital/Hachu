<?php
require_once './tcpdf/tcpdf.php';
$pdf = new TCPDF("L", "mm", "A3", true, "UTF-8" );
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->AddPage();
$pdf->SetFont("kozminproregular", "", 10);
$pdf->SetMargins(20, 10, true);

//css
$css = '<style>
table.example {
  border: 1px solid #c0c0c0;
  width: 1000px;
  border-collapse: collapse;
  font-size: 20%;
}
table.example caption {
  padding-bottom: 5px;
}
table.example th, table.example td {
  border: 1px solid #c0c0c0;
  padding: 6px 8px;
}
table.example colgroup.item {
  background-color: #fffce7;
}
table.example colgroup.data {
  background-color: #ffffff;
}
table.example thead th {
  background-color: #deefff;
  text-align: center;
}
table.example tfoot td {
  background-color: #f5f5f5;
}
table.type11 {
  text-align: left;
  border-collapse: collapse;
  font-size: 80%;
}
table.type11 th {
  padding: 10px;
  background: #ffccff none repeat scroll 0% 50%;
  vertical-align: top;
  font-weight: bold;
  color: #ffffff;
  opacity: 0.41;
}
table.type11 td {
  border-bottom: 1px solid #cccccc;
  padding: 5px;
  background: #eeeeee none repeat scroll 0%;
  vertical-align: top;
}
table.type11 .even {
  background: #f3f6f7 none repeat scroll 0%;
}
table.type11 .hinw {
  width: 250px;
}
table.type12 {
  border-collapse: separate;
  border-spacing: 1px;
  text-align: center;
  line-height: 1.5;
}
table.type12 th {
  padding: 10px;
  background: #6666cc none repeat scroll 0%;
  width: 155px;
  font-weight: bold;
  vertical-align: top;
  color: #ffffff;
}
table.type12 td {
  border-bottom: 1px solid #cccccc;
  padding: 10px;
  background: #eeeeee none repeat scroll 0%;
  width: 155px;
  vertical-align: top;
}
table.type12 .even {
  background: #f3f6f7 none repeat scroll 0%;
}
   </style>';
//html content
$html = <<< EOF

<table  border="1" cellpadding="0" cellspacing="0">



<thead>
<tr>
<th>担当者</th>
<th>営業</th>
<th>得意先</th>
<th width="200">品名</th>
<th>アイテム</th>
<th>サイズ</th>
<th>明細</th>
<th>納期</th>
<th>進行日</th>
<th>進行状態</th>
</tr>
</thead>


<tbody>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
<tr>
<td>加藤（穂）</td>
<td>澁谷支社長</td>
<td>しまむら</td>
<td width="200">じんべえさん</td>
<td>FT組タオル</td>
<td>34×75cm</td>
<td>プリント</td>
<td>2017/12/20</td>
<td>2017/11/27</td>
<td>2st校正</td>
</tr>
</tbody>

</table>
EOF;
//output
$pdf->writeHTML($css . $html, true, 0, true, 0);
$pdf->Output("test.pdf", "I");
?>