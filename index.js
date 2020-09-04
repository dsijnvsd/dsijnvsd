function showHide() {
    let checkbox = document.getElementById("decrease_yes_or_no").value;
    let hiddenInputs = document.getElementById("showhide");
    
        if (checkbox==="yes") {
            hiddenInputs.style.display = "block";
        }
        else {
            hiddenInputs.style.display = "none";
        }
    }
    
    function showHide1() {
        let checkbox = document.getElementById("resident_y_or_n_2019").value;
        let hiddenInputs = document.getElementById("showhide1");
        
            if (checkbox==="yes") {
                hiddenInputs.style.display = "block";
            }
            else {
                hiddenInputs.style.display = "none";
            }
        }
        function showHide2() {
            let checkbox = document.getElementById("report_properly_y_or_n").value;
            let hiddenInputs = document.getElementById("showhide2");
            
                if (checkbox==="yes") {
                    hiddenInputs.style.display = "block";
                }
                else {
                    hiddenInputs.style.display = "none";
                }
            }
            function showHide3() {
                let checkbox = document.getElementById("marital_status_change").value;
                let hiddenInputs = document.getElementById("showhide3");
                
                    if (checkbox==="yes") {
                        hiddenInputs.style.display = "block";
                    }
                    else {
                        hiddenInputs.style.display = "none";
                    }
                }
               


                function showHide4() {
                    let checkbox = document.getElementById("dependants_y_or_n").value;
                    let hiddenInputs = document.getElementById("showhide4");
                    
                        if (checkbox==="yes") {
                            hiddenInputs.style.display = "block";
                        }
                        else {
                            hiddenInputs.style.display = "none";
                        }
                    }

                    

                    function showHide5() {
                        let checkbox = document.getElementById("citizenship_y_or_n").value;
                        let hiddenInputs = document.getElementById("showhide5");
                        
                            if (checkbox==="yes") {
                                hiddenInputs.style.display = "block";
                            }
                            else {
                                hiddenInputs.style.display = "none";
                            }
                        }

                        function showHide6() {
                            let checkbox = document.getElementById("crime_y_or_n").value;
                            let hiddenInputs = document.getElementById("showhide6");
                            
                                if (checkbox==="yes") {
                                    hiddenInputs.style.display = "block";
                                }
                                else {
                                    hiddenInputs.style.display = "none";
                                }
                            }
function agree_properly_report(){
    if(document.getElementById("report_properly_y_or_n") === "No"){
        alert("you must choose yes to continue!");
    }
}
