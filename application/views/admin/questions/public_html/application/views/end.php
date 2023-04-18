<style>
	h1 {
		margin: 100px 0 50px 0;
	}

	.cssanimation,
	.cssanimation span {
		animation-duration: 2s;
		animation-fill-mode: both;
	}

	.cssanimation span {
		display: inline-block
	}

	.fadeInBottom {
		animation-name: fadeInBottom
	}

	@keyframes fadeInBottom {
		from {
			opacity: 0;
			transform: translateY(100%);
		}

		to {
			opacity: 1
		}
	}
</style>
<div style="padding: 15px;">
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2 col-lg-8 offset-lg-2 content-text" style="background: #fff; border-radius: 5px; text-align: center; margin-top: 100px;">
				<h1 class="cssanimation sequence fadeInBottom">
					Thank you for participating in this survey!
				</h1>
				<p>To know more about our project please, leave your email below:</p>
				<div class="col-8 offset-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 py-3">
					<input class="form-control" type="email" autocomplete="off" id="email" required>
					<button id="email-btn" class="btn main-btn mt-2">Submit</button>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function(){
		$('#email-btn').on('click', function(){
			$.post('home/insert_email',
				{
					'email': $('#email').val()
				},function(result){
					var json = $.parseJSON(result);
					alert(json.message);
				}
			)
		})
	})
</script>