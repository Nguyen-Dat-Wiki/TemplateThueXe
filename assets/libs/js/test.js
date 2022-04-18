var checkbox = document.getElementsByClassName("boxGia")
var checkradio = document.getElementsByClassName("radioInput")
var formGia = document.querySelector('.submitGia');
$(document).ready(function() {
    checkbox[1].addEventListener("click", function() {
        if (checkbox[1].checked) {

            for (let index = 0; index < checkradio.length; index++) {
                checkradio[index].removeAttribute('disabled');
            }
            for (let index = 0; index < checkradio.length; index++) {
                checkradio[index].addEventListener("click", function(event) {
                    if (checkradio[index].checked) {
                        formGia.click();
                    } else formGia.click();
                })
            }
        } else {
            for (let index = 0; index < checkradio.length; index++) {
                checkradio[index].checked = false;
                checkradio[index].setAttribute('disabled', true);
            }
            formGia.click();
        }
    })
    checkbox[2].addEventListener("click", function() {
        if (checkbox[2].checked) {
            formGia.click();
        } else formGia.click();
    })
})

$("#like_aleart").click(function() {
    alert("Vui lòng đăng nhập để yêu thích xe");
    location.href = 'signup.php';
})
$("#book_aleart").click(function() {
    alert("Vui lòng đăng nhập để book xe");
    location.href = 'signup.php';
})
$("#booked").click(function() {
    alert("Bạn đã đặt hàng thành công");
})