var typeSelect = document.querySelector("select[name='type_val']");
var allInputs = document.querySelectorAll("input[name^='input_']");

allInputs.forEach(function (input) {
    input.style.display = "none";
});

typeSelect.addEventListener("change", function () {
    var selectedType = typeSelect.value;

    allInputs.forEach(function (input) {
        input.style.display = "none";
    });

    var selectedInput = document.querySelector("input[name='input_" + selectedType + "']");
    if (selectedInput) {
        selectedInput.style.display = "block";
    }
});
