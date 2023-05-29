<?php
//Viết chương trình PHP, sử dụng câu lệnh điều kiện if else để kiểm tra 1 số là số chẵn hay số lẻ?
echo "Cau 1: ";
function checkNumber($number) {
  if ($number < 0) {
    echo "$number là số âm";
  } elseif ($number % 2 == 0) {
    echo "$number là số chẵn";
  } else {
    echo "$number là số lẻ";
  }
}
echo checkNumber(9); 
?>
<?php echo "<br>" ?>

<?php
// // Viết chương trình PHP, sử dụng câu lệnh if else để xếp hạng học lực của học sinh dựa trên điểm điểm thi giữa kỳ, điểm thi cuối kỳ.
// Công thức tính điểm trung bình = (điểm giữa kỳ * 30%) + (điểm cuối kỳ * 70%)
// Điểm trung bình >= 9.0 in ra là hạng "Xuất sắc".
// Điểm trung bình >= 7.0 và < 9.0 in ra là hạng "Giỏi"
// Điểm trung bình >= 5.0 và < 7.0 in ra là hạng "Khá"
// Điểm trung bình < 5.0 in ra là hạng "Trung bình - Yếu"
echo "Cau 2: ";
function academicRanking($midterm, $endterm) {
  $medium = ($midterm * 0.3) + ($endterm * 0.7);
  if ($medium >= 9.0) {
    return "Xuất sắc";
  } elseif ($medium >= 7.0) {
    return "Giỏi";
  } elseif ($medium >= 5.0) {
    return "Khá";
  } else {
    return "Trung bình - Yếu";
  }
}
echo academicRanking(7,9); 
?>
<?php echo "<br>" ?>

<?php
//Kiểm tra năm nay là năm chẵn hay năm lẻ, in ra màn hình kết quả chẵn hay lẻ.
echo "Cau 3: ";
function checkYear() {
    $thisyear = date("Y");
    if ($thisyear % 2 == 0) {
      echo "$thisyear là năm chẵn";
    } else {
      echo "$thisyear là năm lẻ";
    }
  }
  checkYear();
  ?>
  <?php echo "<br>" ?>

  <?php
  //Viết chương trình PHP, sử dụng câu lệnh vòng lặp For để in ra số từ 1 đến 100
  echo "Cau 4: ";
  function printNumbers() {
    for ($i = 1; $i <= 100; $i++) {
      echo $i . " ";
    }
  }
  printNumbers();
  ?>
  <?php echo "<br>" ?>

  <?php
  //Viết trang PHP hiển thị dãy số từ 1 đến 100 sao cho số chẵn là chữ in đậm, số lẻ là chữ in thường.Kết quả: 1 2 3 4….., 100 .Hướng dẫn: Sử dụng vòng lặp for, 1 biến đếm i, toán tử %.
  echo "Cau 5: ";
  function printNumber() {
    for ($i = 1; $i <= 100; $i++) {
      if ($i % 2 == 0) {
        echo "<b>$i</b> "; 
      } else {
        echo "$i "; 
      }
    }
  }
  printNumber();
  ?>
  <?php echo "<br>" ?>

  <?php
  //Viết chương trình PHP, sử dụng vòng lặp For each in ra các năm trong mảng có sẵn dưới đây:$nam = array(1990, 1991, 1992, 1993, 1994, 1995);
  echo "Cau 6: ";
  function printYears($years) {
    foreach ($years as $year) {
      echo $year . " ";
    }
  }
  $years = array(1990, 1991, 1992, 1993, 1994, 1995);
  echo printYears($years);