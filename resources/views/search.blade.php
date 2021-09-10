<style type="text/css">
  .modal {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    overflow: hidden;
  }

  .modal-dialog {
    position: fixed;
    margin: 0;
    width: 100%;
    height: 100%;
    padding: 0;
  }

  .modal-content {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    border: 2px solid #3c7dcf;
    border-radius: 0;
    box-shadow: none;
  }

  .modal-header {
    background: white;
  }

  .modal-body {
    min-height: 80%;
  }

  .modal-footer {
       position:fixed;
       top:auto;
       right:0;
       left:0;
       bottom:0;    
  }

  .lead{
    font-size: 1rem;
  }
  .widget{
    margin-bottom: 5px;
    padding: 15px 20px 15px;
  }
  .widget-header{
    padding-bottom: 0 !important;
  }
  .icon{
    padding-bottom: 5px;
  }
</style>

<!-- Modal -->
<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <nav class="navbar navbar-expand shadow-sm  background-saraga sticky-top">
        <div class="container">
          <a class="navbar-brand" href="#" data-dismiss="modal">
            <img src="{{ asset('images/back-icon.svg') }}" alt="" class="back-icon" title="back">
          </a>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <input type="text" class="form-control m-1" id="searchInput" placeholder="Cari Lapang Atau Lokasi" id="voucher" style="background-color: white; height: 45px;" tabindex="-1">
          </div>
        </div>
      </nav>
      <!-- Modal body -->
      <div class="modal-body container bg-light text-left" style="overflow-y: auto;">
        <p class="text-muted" style="font-size: 1rem">Lapang Rekomendasi</p>
        <div class="row">
            <div class="widget personal-info" style="width: 100%" id="spots_list">
            </div>
        </div>

        <p class="text-muted" style="font-size: 1rem">Lokasi</p>
        <div class="row">
            <div class="widget personal-info" style="width: 100%" id="location_list">
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $( document ).ready(function() {
      // doneTyping();
  });
  //array of results
  var spots_result = [
    {
      name: "Futsal Tubagus 45",
      address: "Jl. Tubagus 46",
      category: "futsal"
    },
    {
      name: "Badminton Juara",
      address: "Jl. Juara 46",
      category: "badminton"
    },
    {
      name: "Futsal Tubagus 45",
      address: "Jl. Tubagus 46",
      category: "badminton"
    },
  ]

  var locations_result = [
    {
      name: "Surabaya",
      address: "Jawa Timur, Indonesia",
      category: "city"
    },
    {
      name: "Sidoarjo",
      address: "Jawa Timur, Indonesia",
      category: "city"
    },
    {
      name: "DKI Jakarta",
      address: "Jakarta, Indonesia",
      category: "city"
    },
    {
      name: "Bandung",
      address: "Jawa Barat, Indonesia",
      category: "city"
    },
  ]

  // $(document).ready(function () {
    //setup before functions
    $('.modal').on('shown.bs.modal', function() {
      $(this).find('[autofocus]').focus();
    });

    var typingTimer;                //timer identifier
    var doneTypingInterval = 1000;  //time in ms, 5 second for example

    //on keyup, start the countdown
    $('#searchInput').on('keyup', function () {
      clearTimeout(typingTimer);
      typingTimer = setTimeout(doneTyping, doneTypingInterval);
    });

    //on keydown, clear the countdown 
    $('#searchInput').on('keydown', function () {
      clearTimeout(typingTimer);
    });
  // });

  //user is "finished typing," do something
  function doneTyping () {

    $.get("{{route('search-recommendation')}}",
    {
      _token: "{{ csrf_token() }}",
      keyword: $("#searchInput").val(),
      sport_id: $("#select-category").val()
    },
    function(data, status){
      var json = JSON.parse(data);
      spots_result = json.spots;
      locations_result = json.cities;  
      // Fill spots list
      var spots_html = "<p class='lead'>There is no result for <b>" + $("#searchInput").val() + "</b></p>";
      if( spots_result.length > 0 ){
        spots_html = "";
        for (var i = 0; i < spots_result.length-1; i++) {
          spots_html += create_widget( i, "spots")
        }
        i = spots_result.length-1;
        spots_html += create_list( i, "spots");
      };
      $("#spots_list").html(spots_html);

      // Fill city list
      var location_html = "<p class='lead'>There is no result for <b>" + $("#searchInput").val() + "</b></p>";
      if( spots_result.length > 0 ){
        location_html = "";
        for (var i = 0; i < locations_result.length-1; i++) {
          location_html += create_widget( i, "locations")
        }
        i = locations_result.length-1;
        location_html += create_list( i, "locations");
      };
      $("#location_list").html(location_html);
    });
  }

  function create_widget(index, array){
    var html = "<div class='widget-header'>";
    html += create_list(index, array)
    html += "</div>";
    return html;
  }

  function create_list(index, array){
    var title = ""
    var address = ""
    console.log(spots_result);
    if(array === "spots"){
      title = spots_result[index].name;
      address = spots_result[index].address;
    }
    else{
      title = locations_result[index];
    }

    var html = "<a href='#' data-dismiss='modal' onclick='list_clicked(" + index + ", \"" + array + "\")'>";
    html += "<div class='d-flex'>";
    html +=   "<div class='d-flex align-items-center'>";
    if(array === "spots"){
      html += "<span><img class='icon' src='{{ asset('images/sports') }}/" + "badminton" + ".svg'></img></span>";
    }
    else{
      html += "<span><img class='icon' src='{{ asset('images/city.svg') }}'></img></span>";
    }
    html +=   "</div>";
    html +=   "<div class='pl-3'>";
    html +=     "<p class='lead' style='color: black; font-weight: bold; margin-bottom: 0px; font-size: 1rem;'>" + title + "</p>";
    if(array === "spots"){
      html +=     "<p class='text-muted'>" + address + "</p>";
    }
    html +=   "</div>";
    html += "</div></a>";
    return html;
  }

  function list_clicked(index, array){
    var title = "";
    if(array === "spots"){
      title = spots_result[index].name;
    }
    else{
      title = locations_result[index];
    }
    // $("#keyword").val(title);
    $('.keyword').each(function() {
      $(this).val(title);
      var that = this;
      setTimeout(function(){ that.selectionStart = that.selectionEnd = 10000; }, 0);
    });
  }
</script>