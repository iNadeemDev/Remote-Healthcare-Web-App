<script>
		function toggleActive() {
			$('.t-container').toggleClass('active');
			$('.sidebar').toggleClass('active');
		}

		function toggleSidebarActive(e) {
			$('.sidebar-top').find('.sidebar-selected').removeClass('sidebar-selected')
			$(e.target).addClass('sidebar-selected')
		}

		$('#btn-dash').on('click', (e) => {
			$('#ph-home').hide();
			$('#ph-dash').fadeIn('fast');
			$('#ph-profile').hide();
			toggleSidebarActive(e)
		})

		$('#btn-home').on('click', (e) => {
			$('#ph-dash').hide();
			$('#ph-home').fadeIn('fast');
			$('#ph-profile').hide();
			toggleSidebarActive(e)
		})

		$('#btn-profile').on('click', (e) => {
			$('#ph-dash').hide();
			$('#ph-home').hide();
			$('#ph-profile').fadeIn('fast');
			toggleSidebarActive(e)
		})
	</script>