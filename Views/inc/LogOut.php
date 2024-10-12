<script>
	let btn_salir=document.querySelector(".close-session");

	btn_salir.addEventListener('click', function(e){
		e.preventDefault();
		Swal.fire({
			title: 'Quieres salir del sistema?',
			text: "La sesion actual se cerrara y saldras del sistema",
			icon: 'question',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Si, salir',
			cancelButtonText: 'No, cancelar'
		}).then((result) => {
			if (result.value) {
				
				let url='<?php echo SERVERURL; ?>Ajax/LoginAjax.php';
				let token='<?php echo $lc->encryption($_SESSION['token_alm']); ?>';
				let correo='<?php echo $lc->encryption($_SESSION['correo_alm']); ?>';

				let datos = new FormData();
				datos.append("token",token);
				datos.append("correo",correo);

				fetch(url,{
					method: 'POST',
					body: datos
				})
				.then(respuesta => respuesta.json())
				.then(respuesta => {
					return alertas_ajax(respuesta);
				});
			}
		});
	});
</script>