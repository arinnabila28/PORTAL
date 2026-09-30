@extends('layouts.main')
@section('title', 'Classification Calculator - NODE.US')

@section('custom-css')
<style>
    .container { max-width: 1000px; margin: 100px auto 40px auto; background: transparent; padding: 20px 40px; box-shadow: none; text-align: left; }
    
    /* Judul Utama */
    h1 { font-family: 'Fredoka', sans-serif !important; font-weight: 700; font-size: 2.9rem; color: #fdf6ec; margin-top: 0; margin-bottom: 20px; letter-spacing: 2px; text-shadow: -2px -2px 0 #000, 2px -2px 0 #000, -2px 2px 0 #000, 2px 2px 0 #000, 4px 4px 0 #000; }
    
    /* Tombol Kembali */
    .btn-back-home { display: inline-block; background: #cf3a20; color: #fff; padding: 8px 20px; border-radius: 20px; border: 2px solid #000; text-decoration: none; font-family: 'Fredoka', sans-serif !important; font-weight: 700; font-size: 1rem; margin-bottom: 30px; box-shadow: 2px 2px 0px #000; transition: 0.2s; text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000; }
    .btn-back-home:hover { background: #111; color: #ffd700; transform: translateY(-2px); text-shadow: none; }

    .calculator-container { display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 40px; }
    .calc-panel { flex: 1; min-width: 300px; background: rgba(255, 255, 255, 0.15); padding: 30px; border-radius: 15px; border: 1px solid rgba(255, 255, 255, 0.3); box-sizing: border-box; }
    .calc-panel-left { text-align: center; }
    .calc-panel-left h2 { font-family: 'Fredoka One', cursive; color: #FFD700; font-size: 1.8rem; margin-bottom: 20px; text-shadow: 1px 1px 0px rgba(0,0,0,0.2); }
    .search-wrapper { position: relative; width: 100%; margin-bottom: 25px; box-sizing: border-box; }
    .search-input { width: 100%; padding: 12px 20px; border-radius: 25px; border: none; outline: none; font-size: 1rem; text-align: center; background: rgba(255,255,255,0.95); color: #333; font-weight: bold; transition: 0.3s; box-sizing: border-box; }
    .search-input:focus { box-shadow: 0 0 15px rgba(255, 215, 0, 0.5); }
    .autocomplete-items { position: absolute; border: 1px solid #d4d4d4; z-index: 99; top: 100%; left: 0; right: 0; border-radius: 0 0 15px 15px; overflow-y: auto; text-align: left; background-color: #fff; max-height: 200px; }
    .autocomplete-items div { padding: 10px; cursor: pointer; background-color: #fff; border-bottom: 1px solid #d4d4d4; color: #333; }
    .autocomplete-items div:hover { background-color: #e9e9e9; }
    .autocomplete-active { background-color: DodgerBlue !important; color: #ffffff; }

    .toggle-container { display: flex; justify-content: center; align-items: center; gap: 15px; color: white; font-weight: bold; font-family: 'Fredoka One', cursive; }
    .switch { position: relative; display: inline-block; width: 50px; height: 24px; }
    .switch input { opacity: 0; width: 0; height: 0; }
    .slider { position: absolute; cursor: pointer; top: 0; left: 0; right: 0; bottom: 0; background-color: #FFD700; transition: .4s; border-radius: 24px; box-shadow: inset 0 0 5px rgba(0,0,0,0.2); }
    .slider:before { position: absolute; content: ""; height: 16px; width: 16px; left: 4px; bottom: 4px; background-color: white; transition: .4s; border-radius: 50%; box-shadow: 0 2px 4px rgba(0,0,0,0.2); }
    input:checked + .slider { background-color: #cf3a20; }
    input:checked + .slider:before { transform: translateX(26px); }

    .calc-panel-right { text-align: center; display: flex; flex-direction: column; justify-content: center; min-height: 280px; }
    .result-subject { font-family: 'Fredoka One', cursive; color: white; font-size: 1.5rem; margin: 0 0 10px 0; min-height: 35px; text-shadow: 1px 1px 0px rgba(0,0,0,0.2); }
    .result-number { font-family: 'Fredoka One', cursive; color: #FFD700; font-size: 2.8rem; margin: 0 0 15px 0; text-shadow: 2px 2px 0px rgba(0,0,0,0.3); min-height: 48px;}
    .result-details { font-family: 'Open Sauce', sans-serif; color: white; font-size: 0.95rem; line-height: 1.5; text-align: left; background: rgba(0,0,0,0.15); padding: 15px; border-radius: 10px; display: none; border: 1px solid rgba(255,255,255,0.2); }
    #emptyState { color: rgba(255,255,255,0.8); font-style: italic; font-family: 'Open Sauce', sans-serif; }
</style>
@endsection

@section('content')
    <div class="container">
        <h1>Classification Calculator</h1>
        <a href="/lab-klasifikasi" class="btn-back-home">🔙 Kembali ke Lab</a>

        <p style="color: white; margin-bottom: 30px; font-family: 'Open Sauce', sans-serif;">Gunakan kalkulator di bawah ini untuk mencari estimasi pembentukan nomor klasifikasi. Ketikkan subjek yang ingin dicari (Contoh: "Kamus Kedokteran", "Sejarah Indonesia", "Psikologi Anak").</p>

        <div class="calculator-container">
            <!-- Panel Kiri -->
            <div class="calc-panel calc-panel-left">
                <h2>Classification Calculator</h2>
                
                <div class="search-wrapper">
                    <input type="text" id="ddcSearchInput" class="search-input" placeholder="Ketik subjek buku...">
                </div>
                
                <div class="toggle-container">
                    <span>DDC</span>
                    <label class="switch"><input type="checkbox" id="systemToggle" disabled title="UDC belum tersedia di simulasi ini"><span class="slider"></span></label>
                    <span style="opacity: 0.5;">UDC</span>
                </div>
                <p style="font-size: 0.8rem; color: rgba(255,255,255,0.7); margin-top: 15px; font-family: 'Open Sauce', sans-serif;">*Fitur UDC sedang dalam tahap pengembangan.</p>
            </div>

            <!-- Panel Kanan -->
            <div class="calc-panel calc-panel-right">
                <div id="emptyState">
                    <p>Mulai ketikkan subjek di panel sebelah kiri untuk melihat hasil pembentukan nomor klasifikasinya di sini.</p>
                </div>

                <div id="resultContainer" style="display: none;">
                    <h3 class="result-subject" id="resSubject">Subjek</h3>
                    <h1 class="result-number" id="resNumber">000</h1>
                    <div class="result-details" id="resDetails">
                        <!-- Detail di-inject lewat JS -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SCRIPT KALKULATOR DINAMIS -->
    <!-- SCRIPT KALKULATOR DINAMIS -->
    <script>
        // Mengambil data dari database Laravel (Controller)
        const ddcDatabase = {!! json_encode($ddc_data) !!};
        const subjectsList = ddcDatabase.map(item => item.subject);

        function autocomplete(inp, arr) {
            let currentFocus;
            inp.addEventListener("input", function(e) {
                let a, b, i, val = this.value;
                closeAllLists();
                if (!val) { 
                    resetResult();
                    return false; 
                }
                currentFocus = -1;
                
                a = document.createElement("DIV");
                a.setAttribute("id", this.id + "autocomplete-list");
                a.setAttribute("class", "autocomplete-items");
                this.parentNode.appendChild(a);
                
                let foundMatch = false;
                for (i = 0; i < arr.length; i++) {
                    // PERBAIKAN: Menggunakan includes() agar pencarian lebih fleksibel (bisa mencari kata di tengah kalimat)
                    if (arr[i].toLowerCase().includes(val.toLowerCase())) {
                        foundMatch = true;
                        b = document.createElement("DIV");
                        
                        // Menyorot (bold) teks yang cocok
                        let matchIndex = arr[i].toLowerCase().indexOf(val.toLowerCase());
                        b.innerHTML = arr[i].substr(0, matchIndex);
                        b.innerHTML += "<strong>" + arr[i].substr(matchIndex, val.length) + "</strong>";
                        b.innerHTML += arr[i].substr(matchIndex + val.length);
                        
                        b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                        b.addEventListener("click", function(e) {
                            inp.value = this.getElementsByTagName("input")[0].value;
                            closeAllLists();
                            displayResult(inp.value);
                        });
                        a.appendChild(b);
                    }
                }
                if(!foundMatch) {
                     b = document.createElement("DIV");
                     b.innerHTML = "<em>Subjek belum ada di database...</em>";
                     b.style.pointerEvents = "none";
                     a.appendChild(b);
                }
            });

            inp.addEventListener("keydown", function(e) {
                let x = document.getElementById(this.id + "autocomplete-list");
                if (x) x = x.getElementsByTagName("div");
                if (e.keyCode == 40) { // Tombol Panah Bawah
                    currentFocus++;
                    addActive(x);
                } else if (e.keyCode == 38) { // Tombol Panah Atas
                    currentFocus--;
                    addActive(x);
                } else if (e.keyCode == 13) { // Tombol ENTER
                    e.preventDefault();
                    if (currentFocus > -1) {
                        if (x) x[currentFocus].click();
                    } else {
                        // PERBAIKAN: Jika langsung tekan Enter tanpa memilih dropdown, langsung eksekusi pencarian
                        closeAllLists();
                        displayResult(inp.value);
                    }
                }
            });

            function addActive(x) {
                if (!x) return false;
                removeActive(x);
                if (currentFocus >= x.length) currentFocus = 0;
                if (currentFocus < 0) currentFocus = (x.length - 1);
                x[currentFocus].classList.add("autocomplete-active");
            }

            function removeActive(x) {
                for (var i = 0; i < x.length; i++) {
                    x[i].classList.remove("autocomplete-active");
                }
            }

            function closeAllLists(elmnt) {
                var x = document.getElementsByClassName("autocomplete-items");
                for (var i = 0; i < x.length; i++) {
                    if (elmnt != x[i] && elmnt != inp) {
                        x[i].parentNode.removeChild(x[i]);
                    }
                }
            }
            document.addEventListener("click", function (e) { closeAllLists(e.target); });
        }

        function displayResult(selectedSubject) {
            // PERBAIKAN: Mengubah pencarian menjadi case-insensitive (mengabaikan huruf besar/kecil)
            const data = ddcDatabase.find(item => item.subject.toLowerCase() === selectedSubject.toLowerCase());
            
            if(data) {
                document.getElementById('emptyState').style.display = 'none';
                document.getElementById('resultContainer').style.display = 'block';
                document.getElementById('resSubject').innerText = data.subject;
                document.getElementById('resNumber').innerText = data.number;
                let detailBox = document.getElementById('resDetails');
                detailBox.innerHTML = data.details;
                detailBox.style.display = 'block';
            } else {
                alert('Subjek "' + selectedSubject + '" tidak ditemukan di database kalkulator.');
                resetResult();
            }
        }

        function resetResult() {
            document.getElementById('emptyState').style.display = 'block';
            document.getElementById('resultContainer').style.display = 'none';
        }

        autocomplete(document.getElementById("ddcSearchInput"), subjectsList);
    </script>
@endsection