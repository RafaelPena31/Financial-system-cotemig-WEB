function ChangeLabelCards(color, classe) {
	document.getElementsByClassName(classe)[0].style.color = color
	document.getElementsByClassName(classe)[1].style.color = color
}

function OpenForm(id) {
	switch (id) {
		case 'formCategory':
			document.getElementById('formCategory').style.display = 'flex'
			document.getElementById('formRece').style.display = 'none'
			document.getElementById('formDesp').style.display = 'none'
			window.location.href = 'TransactionPage.php#formCategory'
			break

		case 'formRece':
			document.getElementById('formCategory').style.display = 'none'
			document.getElementById('formRece').style.display = 'flex'
			document.getElementById('formDesp').style.display = 'none'
			window.location.href = 'TransactionPage.php#formRece'
			break

		case 'formDesp':
			document.getElementById('formCategory').style.display = 'none'
			document.getElementById('formRece').style.display = 'none'
			document.getElementById('formDesp').style.display = 'flex'
			window.location.href = 'TransactionPage.php#formDesp'
			break
	}
}

function CloseForm() {
	document.getElementById('formCategory').style.display = 'none'
	document.getElementById('formRece').style.display = 'none'
	document.getElementById('formDesp').style.display = 'none'
}
