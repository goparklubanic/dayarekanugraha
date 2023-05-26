$(document).ready( function(){
    // get general data
    $.getJSON(api+'general',function(data){
        console.log(data);
        let ht = data.umum.headerTitle.split('-');
        $("#ht1").text(ht[0]);
        $("#ht2").text(ht[1]);
        $("#htDesc").text(data.umum.headerDescription);
        $("#wdmap").prop('src',data.umum.mapUrl);
        $("#brandUrl").prop('src',data.umum.brandUrl);
        $("#wdweb").text(data.umum.webUrl);
        $("#wdabout").text(data.umum.about);
    })

    $.getJSON(api+'features', function(data){
        $("#wdfeatures div").remove();
        $.each(data.fitur, function(i,data){
            $("#wdfeatures").append(`
                <div class="card wande-card" style="width: 12rem;">
                    <img src="${data.iconUrl}" class="card-img-top" alt="fitur-x" height="120px">
                    <div class="card-body">
                    <p class="card-text text-center my-2 fw-bold">${data.namaFitur}</p>
                    </div>
                </div>
            `)
        })
    })

    $.getJSON(api+'outlets', function(data){
        $("#wdoutlets div").remove();
        $.each(data.fitur, function(i,data){
            $("#wdoutlets").append(`
                <div class="card wande-card-outlet" style="width: 12rem;">
                    <img src="${data.iconUrl}" class="card-img-top" alt="fitur-x" height="120px">
                    <div class="card-body">
                    <p class="card-text text-center my-2 fw-bold">${data.jenisoutlet}</p>
                    </div>
                </div>
            `)
        })
    })

    $.getJSON(api+'careers', function(data){
        $("#wdcareers div").remove();
        $.each(data.karir, function(i,data){
            $("#wdcareers").append(`
                <div class="card mb-3 col-lg-6 col-md-6">
                    <div class="row g-0 mb-5">
                        <div class="col-md-4">
                            <img src="${data.iconurl}" class="img-fluid rounded-start" alt="customer service">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">${data.posisi}</h5>
                            <p class="card-text">${data.deskripsi}</p>
                            <a href="#" class="btn btn-success btn-sm btn-wande">Apply!</a>
                        </div>
                        </div> 
                    </div>
                </div>
            `)
        })
    })
})