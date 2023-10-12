<?php 

function connection(){

return mysqli_connect('localhost', 'lucifer', 'kinglucifer', 'mahasiswa_learn');

}

function query($query){

  $conn = connection();
  $result = mysqli_query($conn, $query);

 
//jika hanya ada satu data
  if(mysqli_num_rows($result) == 1){
    return mysqli_fetch_assoc($result);
  }

  // jika data lebih dari satu
  $rows = [];
  while($row = mysqli_fetch_assoc($result)){

    $rows[] = $row;
  }

  return $rows;
}
