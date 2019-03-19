
    var slc1 = document.getElementById("slc1");

    var dataObj = {//is a valid json
      "Acad":  {
            "0016A": {},
            "0017A": {},
            "0017B":{},
            "0018A":{}
        },
        "Alang-alang": {
            "0019A": {},
            "0020A": {},
            "0020B":{}
        },
        "Anonang": {
            "0022A": {},
            "0022B": {},
            "0023A":{},
            "0023B": {},
            "0024A": {},
            "0024B":{},
            "0025A":{}
        },
      "Bagong Mandaue": {
            "0026A": {},
            "0026B": {}
        },
      "Bagong Maslog": {
            "0027A": {},
            "0028A": {},
            "0029A":{}
        },
      "Bagong Oslob": {
            "0030A": {},
            "0031A": {}
        },
      "Bagong Pitogo": {
            "0032A": {},
            "0033A": {}
        },
      "Baki": {
            "0034A": {},
            "0035A": {}
        },
      "Balas": {
            "0036A": {},
            "0037A": {},
            "0038A":{},
            "0039A": {},
            "0039B": {},
            "0040A":{}
        },
      "Balide": {
            "0041A": {},
            "0041B": {},
            "0042A":{},
            "0042B": {},
            "0043A": {}
        },
      "Balintawak": {
            "0044A": {},
            "0044B": {},
            "0045A":{},
            "0046A": {},
            "0047A": {}
        },
      "Bayabas": {
            "0048A": {},
            "0049A": {},
            "0049B":{},
            "0050A": {},
            "0050B":{},
            "0051A":{},
            "0051B": {}
        },
      "Bemposa": {
            "0052A": {},
            "0053A": {},
            "0054A":{}
        },
      "Cabilinan": {
            "0055A": {},
            "0055B": {},
            "0056A":{},
            "0056B": {},
            "0057A": {}
        },
      "Campo Uno": {
            "0058A": {},
            "0058B": {},
            "0059A":{},
            "0060A": {},
            "0060B": {},
            "0061A":{}
        },
      "Ceboneg": {
            "0062A": {},
            "0063A": {}
        },
      "Commonwealth": {
            "0064A": {},
            "0064B": {},
            "0064C": {},
            "0065A": {}
        },
      "Gubaan": {
            "0066A": {},
            "0067A": {},
            "0067B":{},
            "0068A": {},
            "0068B": {},
            "0069A":{},
            "0070A": {},
            "0070B": {}
        },
      "Inasagan": {
            "0071A": {},
            "0071B": {},
            "0072A":{},
            "0072B":{}
        },
      "Inroad": {
            "0073A": {},
            "0073B": {}
        },
      "Kahayagan East": {
            "0074A": {},
            "0074B": {},
            "0075A":{},
            "0076A":{}
        },
      "Kahayagan West": {
            "0077A": {},
            "0077B": {},
            "0078A":{}
        },
      "Kauswagan": {
            "0079A": {},
            "0080A": {}
        },
      "La Paz": {
            "0086A": {},
            "0086B": {},
            "0087A":{},
            "0087B":{}
        },
      "La Victoria": {
            "0088A": {},
            "0088B": {},
            "0089A":{},
            "0089B":{}
        },
      "Lantungan": {
            "0081A": {},
            "0081B": {},
            "0082A":{},
            "0083A": {},
            "0084A": {},
            "0084B":{},
            "0085A": {}
        },
      "Libertad": {
            "0090A": {},
            "0090B": {},
            "0091A":{},
            "0091B": {},
            "0092A": {},
            "0092B":{}
        },
      "Lintugop": {
            "0093A": {},
            "0093B": {},
            "0094A":{},
            "0094B": {},
            "0094C": {},
            "0095A":{},
            "0096A": {},
            "0096B": {},
            "0097A":{},
            "0097B": {},
            "0098A": {},
            "0098B":{}
        },
      "Lubid": {
            "0099A": {},
            "0099B": {},
            "0100A":{}
        },
      "Maguikay": {
            "0101A": {},
            "0101B": {},
            "0102A":{},
            "0102B":{}
        },
      "Mahayahay": {
            "0103A": {},
            "0103B": {},
            "0104A":{},
            "0104B":{}
        },
      "Monte Alegre": {
            "0105A": {},
            "0105B": {},
            "0106A":{},
            "0106B": {},
            "0107A": {},
            "0107B":{}
        },
      "Montela": {
            "0108A": {},
            "0108B": {},
            "0109A":{}
        },
      "Napo": {
            "0110A": {}
        },
      "Panaghiusa": {
            "0111A": {},
            "0112A": {}
        },
      "Poblacion": {
            "0001A": {},
            "0002A": {},
            "0003A":{},
            "0004A": {},
            "0005A": {},
            "0006A":{},
            "0007A": {},
            "0007B": {},
            "0008A":{},
            "0009A": {},
            "0009B": {},
            "0009C":{},
            "0011A": {},
            "0010A": {},
            "0010B":{},
            "0010C": {},
            "0012A": {},
            "0012B":{},
            "0012C": {},
            "0013A": {},
            "0013B":{},
            "0013C": {},
            "0014A": {},
            "0014B":{},
            "0014C": {},
            "0015A":{}
        },
      "Resthouse": {
            "0113A": {},
            "0114A": {},
            "0114B":{}
        },
      "Romarate": {
            "0115A": {},
            "0115B": {},
            "0116A":{},
            "0116B": {},
            "0117A": {},
            "0117B":{},
            "0117C": {}
        },
      "San Jose": {
            "0118A": {},
            "0119A": {},
            "0119B":{},
            "0120A": {},
            "0120B": {},
            "0121A":{},
            "0121B": {},
            "0122A": {},
            "0122B":{},
            "0123A": {},
            "0123B": {},
            "0123C":{},
            "0124A": {},
            "0124B":{}
        },
      "San Juan": {
            "0125A": {},
            "0126A": {},
            "0127A":{}
        },
      "Sapa Loboc": {
            "0128A": {},
            "0129A": {},
            "0130A":{},
            "0130B": {},
            "0131A":{}
        },
      "Tagulalo": {
            "0132A": {},
            "0133A": {},
            "0133B":{}, 
            "0134A":{}
        },
      "Waterfall": {
            "0135A": {},
            "0135B": {},
            "0136A":{},
            "0136B":{}
        }    
    }

    let ctrs = Object.keys(dataObj);//countries - Object.keys return an array
    cmo(ctrs, slc1);//push values to select one
    _1sel();//call the first method of chain
    //slc1.value = "usa"
    //slc1.dispatchEvent(new Event('change'));

    function _1sel() {
        slc2.innerHTML = "";//clear the target select
        let brgy = Object.keys(dataObj[slc1.value]);//get the cities from country as array
        cmo(brgy, slc2);//push values to select two
       
    }
    function cmo(arr, s) {//create options and add to select
        arr.forEach(o => {
            let opt = document.createElement("option");
            opt.value = o;
            opt.innerHTML = o;
            s.add(opt);
        });
    }
$(document).ready(function () {
    //@naresh action dynamic childs
    var next = 0;
    $("#add-more").click(function(e){
        e.preventDefault();
        var addto = "#field" + next;
        var addRemove = "#field" + (next);
        next = next + 1;
        var newIn = '<div id="field'+ next +'" name="field'+ next +'"><!-- Text input--><div class="form-group col-md-4"><label class="control-label" for="Variation">Variation Type</label>  <div class=""><input id="vartype" name="vartype[]" type="text" placeholder="" class="form-control input-md"></div></div><div class="form-group col-md-4"><label class="control-label" for="Price">Price</label><div class=""><input id="varprice" name="varprice[]" type="number" placeholder="" class="form-control input-md"></div></div><div class="form-group col-md-3"><label class="control-label" for="Stocks">Warehouse Stocks</label><div class=""><input id="varstocks" name="varstocks[]" type="number" placeholder="" class="form-control input-md"></div></div></div>';
        //var newIn = '<div id="field'+ next +'" name="field'+ next +'" ><!-- Text input--><div class="form-group col-md-2"><label class="control-label" for="First Name">First Name</label>  <div class=""><input id="fname" name="fname[]" type="text" placeholder="" class="form-control input-md" required></div></div><div class="form-group col-md-2"><label class="control-label" for="Last Name">Last Name</label>  <div class=""><input id="lname" name="lname[]" type="text" placeholder="" class="form-control input-md" required></div></div><div class="form-group col-md-2"><label class="control-label" for="Middle Name">Middle Name</label>  <div class=""><input id="nmane" name="nmane[]" type="text" placeholder="" class="form-control input-md" required></div></div><div class="form-group col-md-2"><label class="control-label" for="Barangay">Barangay</label><div class=""><select name="slc1[]" id="slc1" onchange="_1sel();" class="form-control"></select></div></div><div class="form-group col-md-2"><label class="control-label" for="Precinct">Precinct</label><div class=""><select name="slc2[]" id="slc2" class="form-control"></select></div></div></div>';
        var newInput = $(newIn);
        var removeBtn = '<div class="form-group col-md-1" id="remove' + (next - 1) + '"><label for="">&nbsp;</label><button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" ><i class="fa fa-close"></i></button></div></div>';
        var removeButton = $(removeBtn);
        $(addto).after(newInput);
        $(addRemove).after(removeButton);
        $("#field" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);  
        
            $('.remove-me').click(function(e){
                e.preventDefault();
                var fieldNum = this.id.charAt(this.id.length-1);
                var fieldID = "#field" + fieldNum;
                var removeID = "#remove" + fieldNum;
                $(this).remove();
                $(fieldID).remove();
                $(removeID).remove();
            });
    });
    $("#update-more").click(function(e){
        //console.log("dsadas")
        e.preventDefault();
        var addto = "#field" + next;
        var addRemove = "#field" + (next);
        next = next + 1;
        //var newIn = '<div id="field'+ next +'" name="field'+ next +'"><!-- Text input--><div class="form-group col-md-4"><label class="control-label" for="Variation">Variation Type</label>  <div class=""><input id="vartype" name="vartype[]" type="text" placeholder="" class="form-control input-md"></div></div><div class="form-group col-md-4"><label class="control-label" for="Price">Price</label><div class=""><input id="varprice" name="varprice[]" type="number" placeholder="" class="form-control input-md"></div></div><div class="form-group col-md-3"><label class="control-label" for="Stocks">Warehouse Stocks</label><div class=""><input id="varstocks" name="varstocks[]" type="number" placeholder="" class="form-control input-md"></div></div></div>';
        var newIn = '<div id="field'+ next +'" name="field'+ next +'" class="row"><!-- Text input--><div class="form-group col-md-2"><label class="control-label" for="First Name">First Name</label>  <div class=""><input id="fname" name="fname[]" type="text" placeholder="" class="form-control input-md" required></div></div><div class="form-group col-md-2"><label class="control-label" for="Last Name">Last Name</label>  <div class=""><input id="lname" name="lname[]" type="text" placeholder="" class="form-control input-md" required></div></div><div class="form-group col-md-2"><label class="control-label" for="Middle Name">Middle Name</label>  <div class=""><input id="nmane" name="nmane[]" type="text" placeholder="" class="form-control input-md" required></div></div><div class="form-group col-md-2"><label class="control-label" for="Barangay">Barangay</label><div class=""><select name="slc1[]" id="slc1" onchange="_1sel();" class="form-control"></select></div></div><div class="form-group col-md-2"><label class="control-label" for="Precinct">Precinct</label><div class=""><select name="slc2[]" id="slc2" class="form-control"></select></div></div></div>';
        var newInput = $(newIn);
        var removeBtn = '<div class="form-group col-md-1" id="remove' + (next - 1) + '"><label for="">&nbsp;</label><button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" ><i class="fa fa-close"></i></button></div></div>';
        var removeButton = $(removeBtn);
        $(addto).after(newInput);
        $(addRemove).after(removeButton);
        $("#field" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);  
        
            $('.remove-me').click(function(e){
                e.preventDefault();
                var fieldNum = this.id.charAt(this.id.length-1);
                var fieldID = "#field" + fieldNum;
                var removeID = "#remove" + fieldNum;
                $(this).remove();
                $(fieldID).remove();
                $(removeID).remove();
            });
    });

});