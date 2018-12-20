// function SaveEmployee() {
//   var name = $("#txtEmployeeNameInsert").val();
//   var numberPhone = $("#txtEmployeePhoneInsert").val();
//   var email = $("#txtEmployeeEmailInsert").val();
//   var position = $("#txtEmployeePositionInsert").val();
//   $.ajax({
//     url:"employee.php",
//     data:{name:name, numberPhone:numberPhone, email:email, position:position},
//     type: "post",
//     success:function (result) {
//       if (result == "1") {
//         alert("Thêm mới thành công !");
//       }
//       else {
//         alert("Không thành công !");
//       }
//       $("#add-modal").modal("hide");
//       //SearchCategory();
//     }
//   });
// }