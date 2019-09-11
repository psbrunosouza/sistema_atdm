function selecinarStatus(){
      var selStatus = document.getElementById("selecaoStatus");
      var status = document.getElementById("status");

      status.style.color = "#EB5E55";

      selStatus.addEventListener('change', function(){
      status.innerHTML = this.value;

      if(this.value == "Concluído"){
          status.style.color = "#23CE6B";
      }else if(this.value == "Pendente"){
          status.style.color = "#EB5E55";
      }else if(this.value == "Chamado TI"){
          status.style.color = "#4682B4";
      }else if(this.value == "Reaberto"){
          status.style.color = "#FF4500";
      }
  });
}
