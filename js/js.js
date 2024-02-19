// JavaScript Document
function lo(th, url) {
	$.ajax(url, { cache: false, success: function (x) { $(th).html(x) } })
}
function good(id, type, user) {
	$.post("back.php?do=good&type=" + type, { "id": id, "user": user }, function () {
		if (type == "1") {
			$("#vie" + id).text($("#vie" + id).text() * 1 + 1)
			$("#good" + id).text("收回讚").attr("onclick", "good('" + id + "','2','" + user + "')")
		}
		else {
			$("#vie" + id).text($("#vie" + id).text() * 1 - 1)
			$("#good" + id).text("讚").attr("onclick", "good('" + id + "','1','" + user + "')")
		}
	})
}
function login() {
	let acc = $("#acc").val()
	let pw = $("#pw").val()
	$.post('./api/chk_acc.php', { acc }, (res) => {
		if (parseInt(res) == 0) {
			alert("查無此帳號")
		} else {
			$.post('./api/chk_pw.php', { acc, pw }, (res) => {
				if (parseInt(res) == 1) {
					if ($("#acc").val() == 'admin') {
						location.href = './back.php'
					} else {
						location.href = './index.php'
					}
				} else {
					alert("密碼錯誤")
				}
			})
		}
	})
}
function clean() {
	$("input[type='text'],input[type='password'],input[type='redio']").val("");
}
function reg() {
	let user = {
		acc: $("#acc").val(),
		pw: $("#pw").val(),
		pw2: $("#pw2").val(),
		email: $("#email").val()
	}
	if (user.acc != '' && user.pw != '' && user.pw2 != '' && user.email != '') {
		if (user.pw == user.pw2) {
			$.post("./api/chk_acc.php", { acc: user.acc }, (res) => {
				if (parseInt(res) == 1) {
					alert("帳號重覆")
				} else {
					$.post('./api/reg.php', user, (res) => {
						alert('註冊完成,歡迎加入')
					})
				}
			})
		} else {
			alert("密碼錯誤")
		}
	} else {
		alert("不可空白")
	}
}
