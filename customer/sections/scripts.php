<!-- JavaScript Bundle with Popper -->
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
  crossorigin="anonymous"
></script>

<script>
  function toggleActive() {
    $(".t-container").toggleClass("active");
    $(".sidebar").toggleClass("active");
  }

  function toggleSidebarActive(e) {
    $(".sidebar-top").find(".sidebar-selected").removeClass("sidebar-selected");
    $(e.target).addClass("sidebar-selected");
  }

  $("#btn-dash").on("click", (e) => {
    $("#ph-home").hide();
    $("#ph-dash").fadeIn("fast");
    $("#ph-profile").hide();
    toggleSidebarActive(e);
  });

  $("#btn-home").on("click", (e) => {
    $("#ph-dash").hide();
    $("#ph-home").fadeIn("fast");
    $("#ph-profile").hide();
    toggleSidebarActive(e);
  });

  $("#btn-profile").on("click", (e) => {
    $("#ph-dash").hide();
    $("#ph-home").hide();
    $("#ph-profile").fadeIn("fast");
    toggleSidebarActive(e);
  });
</script>
