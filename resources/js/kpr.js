function process(e)
    {
        if (!e) e = window.event;
        e.preventDefault();
    
        var harga_rumah  = parseInt(document.getElementById('harga_rumah').value);
        var uang_muka    = parseInt(document.getElementById('uang_muka').value);
        var margin       = parseFloat(document.getElementById('margin').value).toFixed(2);
        var tenor        = parseInt(document.getElementById('tenor').value);
        var penghasilan  = parseInt(document.getElementById('penghasilan').value);
        var cicilan_lain = parseInt(document.getElementById('cicilan_lain').value);
        const LIMIT = 40;
    
        // error if...
        // uang_muka >= harga_rumah
        if (uang_muka >= harga_rumah)
        {
            alert('Uang Muka tidak boleh lebih dari Harga Rumah');
            return ;
        }
    
        // uang_muka < 0.2 * harga_rumah
        if (uang_muka < 0.2 * harga_rumah)
        {
            alert('Uang Muka minimal 20 persen dari Harga Rumah');
            return ;
        }
    
        // penghasilan >= harga rumah - uang_muka
        if (penghasilan >= harga_rumah)
        {
            alert('Penghasilan per bulan lebih dari Harga Rumah');
            return ;
        }
    
        // cicilan_lain >= penghasilan
        if (cicilan_lain >= penghasilan)
        {
            alert('Cicilan Lain lebih dari Penghasilan per Bulan');
            return ;
        }
    
        var pinjaman = harga_rumah - uang_muka;
        var total_pinjaman = pinjaman + (margin / 100 * pinjaman * tenor);
        var cicilan_bulanan = parseInt(total_pinjaman / tenor / 12);
        var persentase_cicilan = parseFloat((cicilan_bulanan + cicilan_lain) / penghasilan * 100).toFixed(2);
    
        document.getElementById('hasil_harga_rumah').innerHTML = addCommas(harga_rumah);
        document.getElementById('hasil_uang_muka').innerHTML = addCommas(uang_muka);
        document.getElementById('hasil_margin').innerHTML = margin;
        document.querySelectorAll('.hasil_pinjaman')[0].innerHTML = document.querySelectorAll('.hasil_pinjaman')[1].innerHTML = addCommas(pinjaman);
        document.querySelectorAll('.hasil_tenor')[0].innerHTML = document.querySelectorAll('.hasil_tenor')[1].innerHTML = tenor;
        document.querySelectorAll('.hasil_pinjaman')[0].innerHTML = 
            document.querySelectorAll('.hasil_pinjaman')[1].innerHTML = 
            document.getElementById('pinjaman').innerHTML = addCommas(pinjaman);
        document.getElementById('hasil_total_pinjaman').innerHTML = 
            document.getElementById('total_pinjaman').innerHTML = addCommas(total_pinjaman);
    
        document.getElementById('cicilan_bulanan').innerHTML = addCommas(cicilan_bulanan);
        document.getElementById('persentase_cicilan').innerHTML = persentase_cicilan;
        if (persentase_cicilan > LIMIT)
            document.getElementById('persentase_cicilan').style.color = 'red';
        else
            document.getElementById('persentase_cicilan').style.color = 'green';
    }
    
    function addCommas(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }