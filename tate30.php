<?php
require_once './tcpdf/tcpdf.php';
//$pdf = new TCPDF("P", "mm", "A4", true, "UTF-8" );
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 048');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->AddPage();
$pdf->SetFont("kozminproregular", "", 7);
$pdf->SetMargins(5, 5, true);

//css
$css = '<style>
        * {
            margin: 5px;
            padding: 0;
            box-sizing: border-box;

        }

        table {
            text-align: left;
            width: 100%;
        }

        th {
            vertical-align: middle;
            background-color: rgb(175, 238, 201);
            text-align: center;
        }

        th.num {
            vertical-align: middle;
            background-color: rgb(175, 238, 201);
            text-align: right;
        }

        td {
            vertical-align: middle;
            text-align: center;
        }

        td.num {
            vertical-align: middle;
            text-align: right;
            padding-right: 6px;
        }

        td.hd {
            background-color: rgb(175, 238, 201);
        }

        td.lg,
        th.lg {
            font-size: 5px;
        }

        div.img {
            display: flex;
            justify-content: space-left;
            /*width: 3500px;*/
        }

        div.koma {
            display: flex;
            width: 300px;
        }

        img.item {
            width: auto;
            height: 160px;
        }
    </style>';
//html content

$html = <<< EOF
<div style="width: 200px;padding-left: 15px;text-align: center;font-size: 24pt;font-weight: bold;display:flex;border: 2px solid #000;">
定番発注書</div>
<div style="position:absolute;top: 0px; right: 10px; ">page 1/1</div>
<div style="position:absolute;top: 25px; right: 10px; ">作成日 0000/00/00</div>
<div style="position:absolute;top: 50px; right: 10px; ">作成者 増田汐里</div>
<div style="text-align: left;width: 90%; margin: 20px 20px;">
<table border="1" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td width="45" class="hd">発注先</td>
<td width="40">80214</td>
<td width="150" style="text-align: left;padding-left: 5px;">孚日家紡有限公司</td>
<td width="45" class="hd">発注日</td>
<td width="60">2023-04-28</td>
<td width="45" class="hd">発注者</td>
<td width="60">増田　汐里</td>
<td width="45" class="hd">入力者</td>
<td width="60">増田　汐里</td>
</tr>
</tbody>
</table>
<table border="1" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td width="45" class="hd">代表納期</td>
<td width="60">2023-04-29</td>
<td width="80" class="hd">新規・追加区分</td>
<td width="30">新規</td>
<td width="45" class="hd">契約書No</td>
<td width="70">1234567890</td>
</tr>
</tbody>
</table>
</div>
<div style="text-align: left;">
<table border="1" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<th width="10">No</th>
<th width="50">商品コード</th>
<th width="30">品番</th>
<th width="70">品名</th>
<th width="70">JANコード</th>
<th width="120">色</th>
<th width="25">C/S</th>
<th width="30">数量</th>
<th width="30">単価 (円)</th>
<th width="30">＄単価</th>
<th width="30">為替</th>
<th width="30">経費率</th>
<th class="lg" width="25">ロイヤリティ</th>
<th width="30">上代</th>
</tr>
<tr>
<td>1</td>
<td>2005025300</td>
<td>DE063B</td>
<td class="lg">ｱﾘｽ ﾌﾙｰﾘｰﾙ FT｢**｣</td>
<td>4992272588248</td>
<td class="lg">ホワイト/ブルー/シルバー/ネイビーブルー/エクル</td>
<td>160</td>
<td class="num">3,000</td>
<td class="num">0.00</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.00</td>
<td class="num">1,000</td>
</tr>
<tr>
<td>2</td>
<td>2005025300</td>
<td>DE063B</td>
<td class="lg">ｱﾘｽ ﾌﾙｰﾘｰﾙ FT｢**｣</td>
<td>4992272588248</td>
<td class="lg">ホワイト/ブルー/シルバー/ネイビーブルー/エクル</td>
<td>160</td>
<td class="num">3,000</td>
<td class="num">0.00</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.00</td>
<td class="num">1,000</td>
</tr>
<tr>
<td>3</td>
<td>2005025300</td>
<td>DE063B</td>
<td class="lg">ｱﾘｽ ﾌﾙｰﾘｰﾙ FT｢**｣</td>
<td>4992272588248</td>
<td class="lg">ホワイト/ブルー/シルバー/ネイビーブルー/エクル</td>
<td>160</td>
<td class="num">3,000</td>
<td class="num">0.00</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.00</td>
<td class="num">1,000</td>
</tr>
<tr>
<td>4</td>
<td>2005025300</td>
<td>DE063B</td>
<td class="lg">ｱﾘｽ ﾌﾙｰﾘｰﾙ FT｢**｣</td>
<td>4992272588248</td>
<td class="lg">ホワイト/ブルー/シルバー/ネイビーブルー/エクル</td>
<td>160</td>
<td class="num">3,000</td>
<td class="num">0.00</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.00</td>
<td class="num">1,000</td>
</tr>
<tr>
<td>5</td>
<td>2005025300</td>
<td>DE063B</td>
<td class="lg">ｱﾘｽ ﾌﾙｰﾘｰﾙ FT｢**｣</td>
<td>4992272588248</td>
<td class="lg">ホワイト/ブルー/シルバー/ネイビーブルー/エクル</td>
<td>160</td>
<td class="num">3,000</td>
<td class="num">0.00</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.00</td>
<td class="num">1,000</td>
</tr>
<tr>
<td>6</td>
<td>2005025300</td>
<td>DE063B</td>
<td class="lg">ｱﾘｽ ﾌﾙｰﾘｰﾙ FT｢**｣</td>
<td>4992272588248</td>
<td class="lg">ホワイト/ブルー/シルバー/ネイビーブルー/エクル</td>
<td>160</td>
<td class="num">3,000</td>
<td class="num">0.00</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.00</td>
<td class="num">1,000</td>
</tr>
<tr>
<td>7</td>
<td>2005025300</td>
<td>DE063B</td>
<td class="lg">ｱﾘｽ ﾌﾙｰﾘｰﾙ FT｢**｣</td>
<td>4992272588248</td>
<td class="lg">ホワイト/ブルー/シルバー/ネイビーブルー/エクル</td>
<td>160</td>
<td class="num">3,000</td>
<td class="num">0.00</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.00</td>
<td class="num">1,000</td>
</tr>
<tr>
<td>8</td>
<td>2005025300</td>
<td>DE063B</td>
<td class="lg">ｱﾘｽ ﾌﾙｰﾘｰﾙ FT｢**｣</td>
<td>4992272588248</td>
<td class="lg">ホワイト/ブルー/シルバー/ネイビーブルー/エクル</td>
<td>160</td>
<td class="num">3,000</td>
<td class="num">0.00</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.00</td>
<td class="num">1,000</td>
</tr>
<tr>
<td>9</td>
<td>2005025300</td>
<td>DE063B</td>
<td class="lg">ｱﾘｽ ﾌﾙｰﾘｰﾙ FT｢**｣</td>
<td>4992272588248</td>
<td class="lg">ホワイト/ブルー/シルバー/ネイビーブルー/エクル</td>
<td>160</td>
<td class="num">3,000</td>
<td class="num">0.00</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.00</td>
<td class="num">1,000</td>
</tr>
<tr>
<td>10</td>
<td>2005025300</td>
<td>DE063B</td>
<td class="lg">ｱﾘｽ ﾌﾙｰﾘｰﾙ FT｢**｣</td>
<td>4992272588248</td>
<td class="lg">ホワイト/ブルー/シルバー/ネイビーブルー/エクル</td>
<td>160</td>
<td class="num">3,000</td>
<td class="num">0.00</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.00</td>
<td class="num">1,000</td>
</tr>
<tr>
<td>11</td>
<td>2005025300</td>
<td>DE063B</td>
<td class="lg">ｱﾘｽ ﾌﾙｰﾘｰﾙ FT｢**｣</td>
<td>4992272588248</td>
<td class="lg">ホワイト/ブルー/シルバー/ネイビーブルー/エクル</td>
<td>160</td>
<td class="num">3,000</td>
<td class="num">0.00</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.00</td>
<td class="num">1,000</td>
</tr>
<tr>
<td>12</td>
<td>2005025300</td>
<td>DE063B</td>
<td class="lg">ｱﾘｽ ﾌﾙｰﾘｰﾙ FT｢**｣</td>
<td>4992272588248</td>
<td class="lg">ホワイト/ブルー/シルバー/ネイビーブルー/エクル</td>
<td>160</td>
<td class="num">3,000</td>
<td class="num">0.00</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.00</td>
<td class="num">1,000</td>
</tr>
<tr>
<td>13</td>
<td>2005025300</td>
<td>DE063B</td>
<td class="lg">ｱﾘｽ ﾌﾙｰﾘｰﾙ FT｢**｣</td>
<td>4992272588248</td>
<td class="lg">ホワイト/ブルー/シルバー/ネイビーブルー/エクル</td>
<td>160</td>
<td class="num">3,000</td>
<td class="num">0.00</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.00</td>
<td class="num">1,000</td>
</tr>
<tr>
<td>14</td>
<td>2005025300</td>
<td>DE063B</td>
<td class="lg">ｱﾘｽ ﾌﾙｰﾘｰﾙ FT｢**｣</td>
<td>4992272588248</td>
<td class="lg">ホワイト/ブルー/シルバー/ネイビーブルー/エクル</td>
<td>160</td>
<td class="num">3,000</td>
<td class="num">0.00</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.00</td>
<td class="num">1,000</td>
</tr>
<tr>
<td>15</td>
<td>2005025300</td>
<td>DE063B</td>
<td class="lg">ｱﾘｽ ﾌﾙｰﾘｰﾙ FT｢**｣</td>
<td>4992272588248</td>
<td class="lg">ホワイト/ブルー/シルバー/ネイビーブルー/エクル</td>
<td>160</td>
<td class="num">3,000</td>
<td class="num">0.00</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.00</td>
<td class="num">1,000</td>
</tr>
<tr>
<td>16</td>
<td>2005025300</td>
<td>DE063B</td>
<td class="lg">ｱﾘｽ ﾌﾙｰﾘｰﾙ FT｢**｣</td>
<td>4992272588248</td>
<td class="lg">ホワイト/ブルー/シルバー/ネイビーブルー/エクル</td>
<td>160</td>
<td class="num">3,000</td>
<td class="num">0.00</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.00</td>
<td class="num">1,000</td>
</tr>
<tr>
<td>17</td>
<td>2005025300</td>
<td>DE063B</td>
<td class="lg">ｱﾘｽ ﾌﾙｰﾘｰﾙ FT｢**｣</td>
<td>4992272588248</td>
<td class="lg">ホワイト/ブルー/シルバー/ネイビーブルー/エクル</td>
<td>160</td>
<td class="num">3,000</td>
<td class="num">0.00</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.00</td>
<td class="num">1,000</td>
</tr>
<tr>
<td>18</td>
<td>2005025300</td>
<td>DE063B</td>
<td class="lg">ｱﾘｽ ﾌﾙｰﾘｰﾙ FT｢**｣</td>
<td>4992272588248</td>
<td class="lg">ホワイト/ブルー/シルバー/ネイビーブルー/エクル</td>
<td>160</td>
<td class="num">3,000</td>
<td class="num">0.00</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.00</td>
<td class="num">1,000</td>
</tr>
<tr>
<td>19</td>
<td>2005025300</td>
<td>DE063B</td>
<td class="lg">ｱﾘｽ ﾌﾙｰﾘｰﾙ FT｢**｣</td>
<td>4992272588248</td>
<td class="lg">ホワイト/ブルー/シルバー/ネイビーブルー/エクル</td>
<td>160</td>
<td class="num">3,000</td>
<td class="num">0.00</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.00</td>
<td class="num">1,000</td>
</tr>
<tr>
<td>20</td>
<td>2005025300</td>
<td>DE063B</td>
<td class="lg">ｱﾘｽ ﾌﾙｰﾘｰﾙ FT｢**｣</td>
<td>4992272588248</td>
<td class="lg">ホワイト/ブルー/シルバー/ネイビーブルー/エクル</td>
<td>160</td>
<td class="num">3,000</td>
<td class="num">0.00</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.00</td>
<td class="num">1,000</td>
</tr>
<tr>
<td>20</td>
<td>2005025300</td>
<td>DE063B</td>
<td class="lg">ｱﾘｽ ﾌﾙｰﾘｰﾙ FT｢**｣</td>
<td>4992272588248</td>
<td class="lg">ホワイト/ブルー/シルバー/ネイビーブルー/エクル</td>
<td>160</td>
<td class="num">3,000</td>
<td class="num">0.00</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.00</td>
<td class="num">1,000</td>
</tr>
<tr>
<td>21</td>
<td>2005025300</td>
<td>DE063B</td>
<td class="lg">ｱﾘｽ ﾌﾙｰﾘｰﾙ FT｢**｣</td>
<td>4992272588248</td>
<td class="lg">ホワイト/ブルー/シルバー/ネイビーブルー/エクル</td>
<td>160</td>
<td class="num">3,000</td>
<td class="num">0.00</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.00</td>
<td class="num">1,000</td>
</tr>
<tr>
<td>22</td>
<td>2005025300</td>
<td>DE063B</td>
<td class="lg">ｱﾘｽ ﾌﾙｰﾘｰﾙ FT｢**｣</td>
<td>4992272588248</td>
<td class="lg">ホワイト/ブルー/シルバー/ネイビーブルー/エクル</td>
<td>160</td>
<td class="num">3,000</td>
<td class="num">0.00</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.00</td>
<td class="num">1,000</td>
</tr>
<tr>
<td>23</td>
<td>2005025300</td>
<td>DE063B</td>
<td class="lg">ｱﾘｽ ﾌﾙｰﾘｰﾙ FT｢**｣</td>
<td>4992272588248</td>
<td class="lg">ホワイト/ブルー/シルバー/ネイビーブルー/エクル</td>
<td>160</td>
<td class="num">3,000</td>
<td class="num">0.00</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.00</td>
<td class="num">1,000</td>
</tr>
<tr>
<td>24</td>
<td>2005025300</td>
<td>DE063B</td>
<td class="lg">ｱﾘｽ ﾌﾙｰﾘｰﾙ FT｢**｣</td>
<td>4992272588248</td>
<td class="lg">ホワイト/ブルー/シルバー/ネイビーブルー/エクル</td>
<td>160</td>
<td class="num">3,000</td>
<td class="num">0.00</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.00</td>
<td class="num">1,000</td>
</tr>
<tr>
<td>25</td>
<td>2005025300</td>
<td>DE063B</td>
<td class="lg">ｱﾘｽ ﾌﾙｰﾘｰﾙ FT｢**｣</td>
<td>4992272588248</td>
<td class="lg">ホワイト/ブルー/シルバー/ネイビーブルー/エクル</td>
<td>160</td>
<td class="num">3,000</td>
<td class="num">0.00</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.00</td>
<td class="num">1,000</td>
</tr>
<tr>
<td>26</td>
<td>2005025300</td>
<td>DE063B</td>
<td class="lg">ｱﾘｽ ﾌﾙｰﾘｰﾙ FT｢**｣</td>
<td>4992272588248</td>
<td class="lg">ホワイト/ブルー/シルバー/ネイビーブルー/エクル</td>
<td>160</td>
<td class="num">3,000</td>
<td class="num">0.00</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.00</td>
<td class="num">1,000</td>
</tr>
<tr>
<td>27</td>
<td>2005025300</td>
<td>DE063B</td>
<td class="lg">ｱﾘｽ ﾌﾙｰﾘｰﾙ FT｢**｣</td>
<td>4992272588248</td>
<td class="lg">ホワイト/ブルー/シルバー/ネイビーブルー/エクル</td>
<td>160</td>
<td class="num">3,000</td>
<td class="num">0.00</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.00</td>
<td class="num">1,000</td>
</tr>
<tr>
<td>28</td>
<td>2005025300</td>
<td>DE063B</td>
<td class="lg">ｱﾘｽ ﾌﾙｰﾘｰﾙ FT｢**｣</td>
<td>4992272588248</td>
<td class="lg">ホワイト/ブルー/シルバー/ネイビーブルー/エクル</td>
<td>160</td>
<td class="num">3,000</td>
<td class="num">0.00</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.00</td>
<td class="num">1,000</td>
</tr>
<tr>
<td>29</td>
<td>2005025300</td>
<td>DE063B</td>
<td class="lg">ｱﾘｽ ﾌﾙｰﾘｰﾙ FT｢**｣</td>
<td>4992272588248</td>
<td class="lg">ホワイト/ブルー/シルバー/ネイビーブルー/エクル</td>
<td>160</td>
<td class="num">3,000</td>
<td class="num">0.00</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.00</td>
<td class="num">1,000</td>
</tr>
<tr>
<td>30</td>
<td>2005025300</td>
<td>DE063B</td>
<td class="lg">ｱﾘｽ ﾌﾙｰﾘｰﾙ FT｢**｣</td>
<td>4992272588248</td>
<td class="lg">ホワイト/ブルー/シルバー/ネイビーブルー/エクル</td>
<td>160</td>
<td class="num">3,000</td>
<td class="num">0.00</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.0000</td>
<td class="num">0.00</td>
<td class="num">1,000</td>
</tr>
</tbody>
</table>
<div class="img">
<div class="koma">
<p>①</p>
<img class="item" alt="" src="img/9b796bbbbb5a6c35a4a5788bb839a01d2d2ce456.png">
</div>
<div class="koma">
<p>②</p>
<img class="item" alt="" src="img/2005025300.jpg">
</div>
<div class="koma">
<p>③</p>
<img class="item" alt="" src="img/1e7784f3a7c77b33c0bf5c9f9f5d0575f20de71a.png">
</div>
<div class="koma">
<p>④</p>
<img class="item" alt="" src="img/368b89507b071dcece3c809aa899c0a4a1270041.png">
</div>
<div class="koma">
<p>⑤</p>
<img class="item" alt="" src="img/2016.4月発表_439.jpg">
</div>
</div>
<div class="img">
<div class="koma">
<p>⑥</p>
<img class="item" alt="" src="img/2016.4月発表_551.jpg">
</div>
<div class=" koma">
<p>⑦</p>
<img class="item" alt="" src="img/2016.4月発表_603.jpg">
</div>
<div class="koma">
<p>⑧</p>
<img class="item" alt="" src="img/（BL)0365039800／（PA)0365040100.jpg">
</div>
<div class="koma">
<p>⑨</p>
<img class="item" alt="" src="img/（BL)2035004300／（PI)2035004800.jpg">
</div>
<div class="koma">
<p>⑩</p>
<img class="item" alt="" src="img/(IV)1165006900／（BL）1165007000.jpg">
</div>
</div>
<div class="img">
<div class="koma">
<p>⑪</p>
<img class="item" alt="" src="img/（PA)0365054500／（BR)0365054800.jpg">
</div>
<div class="koma">
<p>⑫</p>
<img class="item" alt="" src="img/（PA）0365055100／（BR)0365055400.jpg">
</div>
<div class="koma">
<p>⑬</p>
<img class="item" alt="" src="img/4c3592d4c53bdf437655ffe8ffc8a83d05d1ed81.jpg">
</div>
<div class="koma">
<p>⑭</p>
<img class="item" alt="" src="img/2d48e87a1fe3a2d38cfefa63c847a023d0fa6ce0.png">
</div>
<div class="koma">
<p>⑮</p>
<img class="item" alt="" src="img/2e8959dc3fcfde765627591f87129365cf469dfa.png">
</div>
</div>
<div class="img">
<div class="koma">
<p>⑯</p>
<img class="item" alt="" src="img/2ea85887c414feec8d685008f3103140a43c08bd.png">
</div>
<div class="koma">
<p>⑰</p>
<img class="item" alt="" src="img/2eeb1f5d619ed476f184dfc39a23e6c64db843f9.png">
</div>
<div class="koma">
<p>⑱</p>
<img class="item" alt="" src="img/2fb66ea798a8a2e84bc92466c46d10d9c666f34b.png">
</div>
<div class="koma">
<p>⑲</p>
<img class="item" alt="" src="img/4a099eb6dd181a56cd366c349f2667dbe787b516.jpg">
</div>
<div class="koma">
<p>⑳</p>
<img class="item" alt="" src="img/4bc8b1826f9ec4f24517b211232621d3477f9590.png">
</div>
</div>
<div class="img">
<div class="koma">
<p>㉑</p>
<img class="item" alt="" src="img/2bf66c56debbeb48b4bcd194951cdae006e02d6f.png">
</div>
<div class="koma">
<p>㉒</p>
<img class="item" alt="" src="img/3ba105fe4fa2b8ba251a44547ba024679c6eef87.png">
</div>
<div class="koma">
<p>㉓</p>
<img class="item" alt="" src="img/3cc4e5b325b40358e17361d72d0ebe5870085753.png">
</div>
<div class="koma">
<p>㉔</p>
<img class="item" alt="" src="img/3d4bd6b6d7393891d9262b884f126b95b6648fd6.jpg">
</div>
<div class="koma">
<p>㉕</p>
<img class="item" alt="" src="img/3d5bec0e5b719f3f3ef0271101107442f8d01347.jpg">
</div>
</div>
<div class="img">
<div class="koma">
<p>㉖</p>
<img class="item" alt="" src="img/0f205cf5b18126d2bcf60b89a664267a9c9a1f21.png">
</div>
<div class="koma">
<p>㉗</p>
<img class="item" alt="" src="img/0f628292f9090cfdccdb34345be1b77d8eb1a95b.png">
</div>
<div class="koma">
<p>㉘</p>
<img class="item" alt="" src="img/0fcac53a1b7188e7611eda674fbf4f22a6e112c7.png">
</div>
<div class="koma">
<p>㉙</p>
<img class="item" alt="" src="img/2bd5d0adf2553054f6285b0fb8cf1aa6013f4f3a.png">
</div>
<div class="koma">
<p>㉚</p>
<img class="item" alt="" src="img/2be6831edad5f3cae7ebb9e27013468400fad73b.png">
</div>
</div>
</div>
EOF;

//output
$pdf->writeHTML($css . $html, true, 0, true, 0);
$pdf->Output("test.pdf", "I");
?>