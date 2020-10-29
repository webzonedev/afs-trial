

 // this functions toggles the upload button to be disabled and enabled 


 //starts here ---------------------------_>



function toggleButton(InputID, ButtonID){

    if($('#'+InputID).val() ==""){
      $('#'+ButtonID).prop('disabled',true);
      }
      else {
        $('#'+ButtonID).prop('disabled',false);
      }

}

  //ends here <-------------------------------------
 

//   ===================================================================================


// this is for the progress bar of the file upload process

//starts here ---------------------------_>


  maProgressBar = $('#progressbar');


  $('.allUploadForms').ajaxForm({

  
  beforeSend: function() {
  
  var percentVal = '0%';
  maProgressBar.width(percentVal);
  maProgressBar.html(percentVal);
  
  },

  uploadProgress: function(event, position, total, percentComplete) {
  window.location.hash = '#';
  var percentVal = percentComplete + '%';
  maProgressBar.width(percentVal)
  maProgressBar.html(percentVal);
  
  },

  success: function(response){
    $("#upload_msg").text(response.msg);
    $("#upload_msg").fadeIn('fast').delay(1000).fadeOut('fast');
    maProgressBar.width(0)
    maProgressBar.html('0%');
  },

  

  });

  //ends here <-------------------------------------





//   ===================================================================================


  // this is for the delete Modal popup

//starts here ---------------------------_>
 
            function getDeleteModal(elementID,msg){
            $("#exampleModalLabel").html(msg);
            var hr = $("#"+elementID).attr("href");

           $("#modalAnchor").attr('href',hr);
          
          
            }

//ends here <-------------------------------------



//governorate and district select options :


function selectGovernorate(gov_id,dis_id){

var district = $("#"+dis_id);

switch($("#"+gov_id).val()) {






  case 'بيروت':
    district.prop('disabled',false)
    district.html("<option value='بيروت'>  بيروت </option> ")

    break;

  case 'جبل لبنان':
    district.prop('disabled',false)
    district.html("<option value='بعبدا'>  بعبدا </option> <option value='المتن'>  المتن </option> <option value='الشوف'>  الشوف </option>"+
    "<option value='عاليه'>  عاليه </option> <option value='كسروان'>  كسروان </option> <option value='جبيل'>  جبيل </option>" )

    break;

    case 'الشّمال':
      district.prop('disabled',false)
      district.html("<option value='طرابلس'>  طرابلس </option> <option value='الكورة'>  الكورة </option> <option value='زغرتا'>  زغرتا </option>"+
      "<option value='البترون'>  البترون </option> <option value='بشري'>  بشري </option> ")
  
      break;


    case 'الجنوب':
      district.prop('disabled',false)
      district.html("<option value='صيدا'>  صيدا </option> <option value='صور'>  صور </option> <option value='جزّين'>  جزّين </option>")
  
      break;

    case 'البقاع':
      district.prop('disabled',false)
      district.html("<option value='زحلة'>  زحلة </option> <option value='البقاع الغربي'>  البقاع الغربي </option> <option value='راشيّا'>  راشيّا </option>")
    
      break;

    case 'النّبطيّة':
      district.prop('disabled',false)
      district.html("<option value='النبطيّة'>  النبطيّة </option> <option value='بنت جبيل'>  بنت جبيل </option> <option value='مرجعيون'>  مرجعيون </option>"+
        "<option value='حاصبيّا'>  حاصبيّا </option> ")
      
      break;

      case 'عكّار':
        district.prop('disabled',false)
        district.html("<option value='عكّار'>  عكّار </option>")
          
        break;

      case 'بعلبك الهرمل':
        district.prop('disabled',false)
        district.html("<option value='بعلبك الهرمل'>  بعلبك الهرمل </option>")
           
        break;

    default :
    district.prop('disabled',true)
    district.val(0); 
    district.html("<option value='لا شيء'>لا شيء  </option>")


    
  } 
  

}


$("#governorate1").on('change', function(){
  $('#governorate2').val( $('#governorate1').val()  ); 

});





function selectDistrict(dis_id,rea_id){
  var rea = $("#"+rea_id);
  
  switch($("#"+dis_id).val()) {
  
  
    case 'بيروت':
      rea.prop('disabled',false)
      rea.html("<option value='الأشرفيّة'>  الأشرفيّة </option> <option value='الرميل'>  الرميل </option> <option value='المدور'>  المدور </option> " +
      "<option value='المرفأ'>  المرفأ </option> <option value='الباشورة'>  الباشورة </option> <option value='الصّيفي'>  الصّيفي </option>" +
      "<option value='رأس بيروت'>  رأس بيروت </option> <option value='المصيطبة'>  المصيطبة </option> <option value='المزرعة'>  المزرعة </option>"+
      "<option value='زقاق البلاط'>  زقاق البلاط </option> <option value='ميناء الحصن'>  ميناء الحصن </option> <option value='عين المريسة'>  عين المريسة </option>")
  
      break;

      case 'بعبدا':
        rea.prop('disabled',false)
        rea.html("<option value='بعبدا'>  بعبدا </option> <option value='الحدث'>  الحدث </option> <option value='فرن الشّبّاك'>  فرن الشّبّاك </option> " +
        "<option value='برج البراجنة'>  برج البراجنة </option> <option value='ليلكي'>  ليلكي </option> <option value='حارة حريك'>  حارة حريك </option>" +
        "<option value='شيّاح'>  شيّاح </option> <option value='تحويطة الغدير'>  تحويطة الغدير </option> <option value='كفرشيما'>  كفرشيما </option>"+
        "<option value=' المرواشي'>   المرواشي </option> <option value=' بطشاي'> بطشاي </option> <option value=' وادي شحرور'>  وادي شحرور  </option>" +

        "<option value='حارة السّت'>  حارة السّت </option> <option value='الويزة'>  الويزة </option> <option value=' عاريّا'>   عاريّا </option> " +
        "<option value='شويت '>  شويت  </option> <option value='العباديّة'>  العباديّة </option> <option value=' الهلاليّة'>  الهلاليّة  </option>" +
        "<option value='رويسة البلّوط'>  رويسة البلّوط </option> <option value='بعلشميه'>  بعلشميه </option> <option value='حارة حمزة'>  حارة حمزة </option>"+
        "<option value=' رأس الحرف'>   رأس الحرف </option> <option value=' قتالة'> قتالة </option> <option value=' القريّة '>  القريّة   </option>" +
        
        "<option value='قبيع '>قبيع </option> <option value='بسابا'>  بسابا </option> <option value=' قرطاضة'>   قرطاضة </option> " +
        "<option value='زندوقة '>  زندوقة  </option> <option value='القصيبة'>  القصيبة </option> <option value=' الكنيسة'>  الكنيسة  </option>" +
        "<option value='رأس المتن'>  رأس المتن </option> <option value='العربانيّة'>  العربانيّة </option> <option value='عين حمادة'>  عين حمادة </option>"+
        "<option value=' الدليبة '>   الدليبة  </option> <option value=' صليما'> صليما </option> <option value=' حاصبيّا المتن '>  حاصبيّا المتن   </option>" +
        
        "<option value='بزبدين '>  بزبدين  </option> <option value='أرصون'>  أرصون </option> <option value='جورة أرصون'>  جورة أرصون </option>"+
        "<option value=' قرنايل '>   قرنايل  </option> <option value=' دير خونا'> دير خونا </option> <option value=' الشميسة  '>  الشميسة    </option>"+
        " <option value=' دير الحرف  '>  دير الحرف    </option>")
    
        break;
  
    
  

      default :
      rea.prop('disabled',true)
      rea.val(0); 
      rea.html("<option value='لا شيء'>لا شيء </option>")
  
  
  
  
  
  
      
    } 



    
  
  }


  function copyAddress(){

    selectGovernorate('governorate2','district2');
    selectDistrict('district2','real_estate_area2');


    $('#district2').val( $('#district1').val()  ); 
    $('#governorate2').val( $('#governorate1').val()  ); 
    $('#street2').val( $('#street1').val()  ); 
    $('#neighborhood2').val( $('#neighborhood1').val()  ); 
    $('#real_estate_area2').val( $('#real_estate_area1').val()  ); 
    $('#real_estate_number2').val( $('#real_estate_number1').val()  ); 
    $('#division_number2').val( $('#division_number1').val()  ); 
    $('#building2').val( $('#building1').val()  ); 
    $('#floor2').val( $('#floor1').val()  ); 
    $('#phone2').val( $('#phone1').val()  ); 
    $('#fax2').val( $('#fax1').val()  ); 
    $('#mailbox2').val( $('#mailbox1').val()  ); 
    $('#region2').val( $('#region1').val()  ); 
    $('#changed_date2').val( $('#changed_date1').val()  );
    

}