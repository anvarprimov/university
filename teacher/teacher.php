<? 
  session_start();
  if ($_SESSION['rol']!="user") {
    print("<script>window.location='../logout.php'</script>");
  }
  $fak_id=$_SESSION['fak_id'];
  $fak_name=$_SESSION['fak_name'];
?>
<? include_once "../include/db.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Melody</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- endinject -->
</head>
<body class="sidebar-fixed">
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <? include_once "../include/navbar.php"; ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->

      <? include_once "../include/menu_teach.php"; ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Fakultetning umumiy ma'lumotlari
            </h3>
          </div>
          <div class="row grid-margin">
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <!-- <h4 class="card-title">Badge Outlined Variations</h4> -->
                  <div class="template-demo">
                    <table class="table mb-0">
                      <thead>
                        <tr>
                          <th class="pl-0"></th>
                          <th class="text-right"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="pl-0">Yunalishlar</td>
                          <? $yunalish=mysql_query("SELECT id from yunalish where fak_id=$fak_id"); ?>
                          <td class="pr-0 text-right"><div style="font-size: 25px; font-weight: bold;"><?=mysql_num_rows($yunalish)?></div></td>
                        </tr>
                        <tr>
                          <td class="pl-0">Guruhlar</td>
                          <? $guruh=mysql_query("SELECT id from guruh where fak_id=$fak_id"); ?>
                          <td class="pr-0 text-right"><div style="font-size: 25px; font-weight: bold;"><?=mysql_num_rows($guruh)?></div></td>
                        </tr>
                        <tr>
                          <td class="pl-0">Talabalar</td>
                          <? $talaba=mysql_query("SELECT id from talaba where fak_id=$fak_id"); ?>
                          <td class="pr-0 text-right"><div style="font-size: 25px; font-weight: bold;"><?=mysql_num_rows($talaba)?></div></td>
                        </tr>
                        <tr>
                          <td class="pl-0">Talaba yigitlar</td>
                          <? $yigit=mysql_query("SELECT id from talaba where fak_id='$fak_id' and jins='1'"); ?>
                          <td class="pr-0 text-right"><div style="font-size: 25px; font-weight: bold;"><?=mysql_num_rows($yigit)?></div></td>
                        </tr>
                        <tr>
                          <td class="pl-0">Talaba qizlar</td>
                          <? $qizlar=mysql_query("SELECT id from talaba where fak_id='$fak_id' and jins='0'"); ?>
                          <td class="pr-0 text-right"><div style="font-size: 25px; font-weight: bold;"><?=mysql_num_rows($qizlar)?></div></td>
                        </tr>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <!-- <h4 class="card-title">Badge Outlined Variations</h4> -->
                  <div class="template-demo">
                    <table class="table mb-0">
                      <thead>
                        <tr>
                          <th class="pl-0"></th>
                          <th class="text-right"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="pl-0">Imityozli talabalar</td>
                          <? $imtiyoz=mysql_query("SELECT id from talaba where fak_id='$fak_id' and imtiyoz_id!='0'"); ?>
                          <td class="pr-0 text-right"><div style="font-size: 25px; font-weight: bold;"><?=mysql_num_rows($imtiyoz)?></div></td>
                        </tr>
                        <tr>
                          <td class="pl-0">Faol talabalar</td>
                          <? $faollar=mysql_query("SELECT id from talaba where fak_id='$fak_id' and yutuq_id>'0'"); ?>
                          <td class="pr-0 text-right"><div style="font-size: 25px; font-weight: bold;"><?=mysql_num_rows($faollar)?></div></td>
                        </tr>
                        <tr>
                          <td class="pl-0">Ijarada turuvchi talabalar</td>
                          <? $ijara=mysql_query("SELECT id from talaba where fak_id='$fak_id' and turar_joy='ijara'"); ?>
                          <td class="pr-0 text-right"><div style="font-size: 25px; font-weight: bold;"><?=mysql_num_rows($ijara)?></div></td>
                        </tr>
                        <tr>
                          <td class="pl-0">Talabalar turar joyida </td>
                          <? $ttj=mysql_query("SELECT id from talaba where fak_id='$fak_id' and turar_joy='yotoqxona'"); ?>
                          <td class="pr-0 text-right"><div style="font-size: 25px; font-weight: bold;"><?=mysql_num_rows($ttj)?></div></td>
                        </tr>
                        <tr>
                          <td class="pl-0">Yaqin qarindoshinikida yashovhi talabalar</td>
                          <? $qarindosh=mysql_query("SELECT id from talaba where fak_id='$fak_id' and turar_joy='qarindosh'"); ?>
                          <td class="pr-0 text-right"><div style="font-size: 25px; font-weight: bold;"><?=mysql_num_rows($qarindosh)?></div></td>
                        </tr>
                        <tr>
                          <td class="pl-0">Uyidan qatnovchi talabalar</td>
                          <? $uyidan=mysql_query("SELECT id from talaba where fak_id='$fak_id' and turar_joy='uyidan'"); ?>
                          <td class="pr-0 text-right"><div style="font-size: 25px; font-weight: bold;"><?=mysql_num_rows($uyidan)?></div></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="template-demo">
                    <table class="table mb-0">
                      <thead>
                        <tr>
                          <th class="pl-0"></th>
                          <th class="text-right"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="pl-0">Grandda tahsil oluvchilar</td>
                          <? $grand=mysql_query("SELECT id from talaba where fak_id='$fak_id' and grand='grand'"); ?>
                          <td class="pr-0 text-right"><div style="font-size: 25px; font-weight: bold;"><?=mysql_num_rows($grand)?></div></td>
                        </tr>
                        <tr>
                          <td class="pl-0">Shartnoma asosida</td>
                          <? $shartnoma=mysql_query("SELECT id from talaba where fak_id='$fak_id' and grand='shartnoma'"); ?>
                          <td class="pr-0 text-right"><div style="font-size: 25px; font-weight: bold;"><?=mysql_num_rows($shartnoma)?></div></td>
                        </tr>
                        <tr>
                          <td class="pl-0">Chin yetim talabalar</td>
                          <? $yetimlik=mysql_query("SELECT id from talaba where fak_id='$fak_id' and yetimlik='1'"); ?>
                          <td class="pr-0 text-right"><div style="font-size: 25px; font-weight: bold;"><?=mysql_num_rows($yetimlik)?></div></td>
                        </tr>
                        <tr>
                          <td class="pl-0">Kam taminlanganlar talabalar</td>
                          <? $temir_daftar=mysql_query("SELECT id from talaba where fak_id='$fak_id' and temir_daftar='1'"); ?>
                          <td class="pr-0 text-right"><div style="font-size: 25px; font-weight: bold;"><?=mysql_num_rows($temir_daftar)?></div></td>
                        </tr>
                        <tr>
                          <td class="pl-0">Nogironligi bor talabalar</td>
                          <? $nogiron=mysql_query("SELECT id from talaba where fak_id='$fak_id' and nogiron>'0'"); ?>
                          <td class="pr-0 text-right"><div style="font-size: 25px; font-weight: bold;"><?=mysql_num_rows($nogiron)?></div></td>
                        </tr>
                        <tr>
                          <td class="pl-0">Oilali talabalar</td>
                          <? $oilaviy=mysql_query("SELECT id from talaba where fak_id='$fak_id' and oilaviy='oilali'"); ?>
                          <td class="pr-0 text-right"><div style="font-size: 25px; font-weight: bold;"><?=mysql_num_rows($oilaviy)?></div></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- partial:partials/_footer.html -->
        <? include_once "../include/footer.php"; ?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
<? include_once "../include/js.php"; ?>
</body>
</html>
