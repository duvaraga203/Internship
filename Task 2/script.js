//Age validation
function Check() {
  let age = document.getElementById("age");
  let mobileNo = document.getElementById("mobile").value;

  if (age.value < 18) {
    alert("Age must be above 18.");
    event.preventDefault();
  }

  if (mobileNo.length != 10 || mobileNo == "") {
    alert("Mobile number must be 10 digits.");
    return false;
  }
}

function resetForm() {
  let del = document.getElementById("add_field");
  let element = document.createElement("div");
  del.remove();
  element.setAttribute("id","add_field");
  document.getElementById("new_field").appendChild(element);
}

//Dynamic input field creation
function addField(type) {
  let element = document.createElement("input");
  let h1_element = document.createElement("h1");
  let p_element = document.createElement("p");
  let radio_div = document.createElement("div");
  let label_element = document.createElement("label");
  let append_inside = document.getElementById("add_field");

  if (type === "empty") {
    //Create p element
    p_element.innerHTML = "Please select any option.";
    p_element.setAttribute("id", "ptag");
    //Append
    append_inside.appendChild(p_element);
  } else {
    append_inside.style.display = "block";
    switch (type) {
      case "input": {
        //for input
        element.setAttribute("type", type);
        element.setAttribute("value", "type here");
        element.setAttribute("id", "new_input");

        //appending
        append_inside.appendChild(element);
        break;
      }

      case "radio": {
        //radio div
        radio_div.setAttribute("class", "radio_block");

        //for input
        element.setAttribute("type", type);
        element.setAttribute("id", "new_radio");

        //label
        label_element.innerHTML = "Radio button.";
        label_element.setAttribute("for", "new_radio");
        label_element.setAttribute("type", "text");
        label_element.setAttribute("id", "new_label");

        //appending
        append_inside.appendChild(radio_div);
        radio_div.appendChild(element);
        radio_div.appendChild(label_element);

        break;
      }

      case "button": {
        //for input
        element.setAttribute("type", type);
        element.setAttribute("value", type);
        element.setAttribute("id", "new_button");

        //appending
        append_inside.appendChild(element);
        break;
      }

      case "h1": {
        //Create h1 element
        h1_element.innerHTML = "H1 element";
        //Append
        append_inside.appendChild(h1_element);

        break;
      }
    }
  }
}
