<br><br><br>
<div class="container">
    <canvas id="myChart"></canvas>
</div>
<br><br> <hr>
<div class="ttbieudo">
  <hr>
  <div class="sldanhmuc">
    Hiện Có:
    <?= $sldanhmuc ?> Danh Mục
  </div>
<div class="slspadmin">
  Hiện Có:
  <?= $slspadmin ?> Sản Phẩm
</div>
<div class="tongspcontrongkho">
  SL Trong Kho:
  <?= $slsptrongkho ?>
</div>
<div class="spbanchaynhat">
    Sản Phẩm Bán Chạy Nhất:
    <?= $spbanchay['title_sanpham'] ?> :
    <?= $bieudo['spmax'] ?>
    <img src="../../Images/sp/<?= $spbanchay['img_sanpham'] ?>" alt="" width="80px">
</div>
</div>
<hr>

<br><br><br><br>
<style>
.ttbieudo{
  display: flex;
  justify-content: space-evenly;
}
</style>
<script>
    let myChart = document.getElementById('myChart').getContext('2d');
    // Global Options
    Chart.defaults.global.defaultFontFamily = 'Lato';
    Chart.defaults.global.defaultFontSize = 18;
    Chart.defaults.global.defaultFontColor = '#777';

    let massPopChart = new Chart(myChart, {
      type:'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['Thu Nhập Tổng', 'Tổng SL SP Bán Ra', 'SL Đơn Hoàn Thành', 'SL Đơn Hàng Thất Bại'],
        datasets:[{
          label:'',
          data:[
            <?= $bieudo['thunhap'] * 0.0001 ?>,
            <?= $bieudo['sospbanra'] ?>,
            <?= $bieudo['sl_don'] ?>,
            <?= $bieudo['giaothatbai'] ?>
            
          ],
          //backgroundColor:'green',
          backgroundColor:[
            'rgba(255, 99, 132, 0.6)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)'
          ],
          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        }]
      },
      options:{
        title:{
          display:true,
          text:'Biểu Đồ Thống Kê Chi Tiết',
          fontSize:25
        },
        legend:{
          display:true,
          position:'right',
          labels:{
            fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:50,
            right:0,
            bottom:0,
            top:0
          }
        },
        tooltips:{
          enabled:true
        }
      }
    });
  </script>
