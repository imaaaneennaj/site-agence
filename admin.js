function clickb(ele){
   ele.addEventListener("click",function(){
    ele.classList.remove("des-active")
      let eles=document.querySelectorAll(".element")
      eles.forEach(function(other){
        if(other!==ele){
            other.classList.add("des-active")
        }
      })
   })
}
let btuu=document.querySelectorAll(".clac")
btuu.addEventListener("click",function(){
    let divs=document.querySelectorAll(".element")
    divs.forEach(function(div){
        clickb(div)
    })
})
   //////button-ajouter////////
   let button_aj=document.getElementById("jouter-u")
   button_aj.addEventListener("click",function(event){
       let header_wr=document.getElementById("header-wr")
       header_wr.style.filter="blur(5px)"
       let div_fo=document.querySelector(".form-ajoute")
       div_fo.classList.remove("des-active");
       let elements=document.querySelectorAll(".element");
       elements.forEach(el=>{
           el.style.display="none"
       })
   })
   ////////////
   let submi_aj=document.getElementById("submi_aj")
   submi_aj.addEventListener("click",function(event){
       setTimeout(function() {
           let inputs=document.getElementByClassName(".i-form")
           inputs.forEach(elem=>{
               elem.value='';
           })
       }, 1000);
   })

   if (this.name === "utulisateurs") {
    activeElement.forEach(ele=>{
        if(ele.name!==this.name){
            ele.classList.add("des-active");
        }})
    document.getElementById("utulisateurs").classList.remove("des-active");
}else

let header_wr=document.getElementById("header-wr")
       header_wr.style.filter="blur(5px)"
       let div_fo=document.querySelector(".form-ajoute")
       div_fo.classList.remove("des-active");
       let elements=document.querySelectorAll(".element");
       elements.forEach(el=>{
           el.style.display="none"
       })
       let inputs=document.querySelectorAll(".i-form")
           inputs.forEach(elem=>{
               elem.value='';
           })
           let submi_aj=document.getElementById("submi_aj")
        submi_aj.addEventListener("click",function(event){
        setTimeout(function() {
           let inputs=document.getElementByClassName(".i-form")
           inputs.forEach(elem=>{
               elem.value='';
           })},2);})
           if(isset($_GET['idmo-ser']) && !empty($_GET['idmo-ser'])){
            echo"oui";
            $id=$_GET['idmo-ser'];
                $result_4="SELECT* FROM services where  id=$id";
                $result4=$conn->query($result_4);
                    if (!$result4) {
                        echo "<script>console.log('oui')
                        </script>";
                    } else {
                        $nb_ser = mysqli_num_rows($result4);
                         echo" $nb_ser";
                    }
        }else{
            echo"non";
        }
        let btn_rea=document.getElementById("btn-edit-rea")
        btn_rea.addEventListener("click",function(event){
            event.preventDefault()
            let header_wr=document.getElementById("header-wr")
            header_wr.style.filter="blur(5px)"
            let div_up=document.getElementById("for-up-rea");
            div_up.classList.remove("des-active")
            let elements=document.getElementById("realisations");
            elements.style.display="none"
          
        })

        let submi_a=document.querySelectorAll(".submi_aj")
        submi_a.forEach(submi_aj=> {
            submi_aj.addEventListener("onsubmit",function(event){
                if(this.name==="ajoute_us"){
                    setTimeout(function() {
                        let inputs=document.querySelectorAll(".f")
                        inputs.forEach(elem=> {
                        elem.innerHTML='';
                    })},7);
                }else if(this.name==="ajouter_ser"){
                    setTimeout(function() {
                        let inputs=document.querySelectorAll(".ser-form")
                        inputs.forEach(elem=> {
                        elem.value='';
                    })},1);
                }
            }) 
        })