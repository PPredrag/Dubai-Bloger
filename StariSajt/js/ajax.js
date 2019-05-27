function ajaxFunction(){
      var ajaxRequest;

      try{ 
         ajaxRequest = new XMLHttpRequest();
      }catch (e){
         try{
            ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
         }catch (e) {
            try{
               ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
            }catch (e){
               alert("Vas pretrazivac ne podrzava AJAX!");
               return false;
            }
         }
      }
      return ajaxRequest;
   }
  