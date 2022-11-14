<script>
    var key = {{ $key }}
    var id = 'canvas'+key;
    var short_link_id = 'short_link'+key;
    var options = {
        width: 200,
        height: 200,
        margin: 2,
        type: "svg",
        data: document.getElementById(short_link_id).innerText,
        {!! $options !!}
    };
    const qrCode{{$key}} = new QRCodeStyling({...options});
    console.log(document.getElementById(short_link_id).innerText);
    qrCode{{$key}}.append(document.getElementById(id));
</script>