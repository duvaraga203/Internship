//Age validation
function check() {
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

  if (age.value >= 18 && mobileNo.length == 10) {
    alert("Form submitted successfully!!!");
  }
}

function resetForm() {
  let del = document.getElementById("add_field");
  let element = document.createElement("div");
  del.remove();
  element.setAttribute("id", "add_field");
  document.getElementById("new_field").appendChild(element);
}

//Dynamic input field creation
function addField(type) {
  let element = document.createElement("input");
  let h1_element = document.createElement("h1");
  let radio_div = document.createElement("div");
  let select_box = document.createElement("select");
  let label_element = document.createElement("label");
  let label_element1 = document.createElement("label");
  let append_inside = document.getElementById("add_field");

  if (type === "empty") {
    //select option alert
    alert("Please select any option.");
  } else {
    switch (type) {
      case "input": {
        //for input
        element.setAttribute("type", type);
        element.setAttribute("placeholder", "type here");
        element.setAttribute("id", "new_input");

        //label
        label_element.innerHTML = "Input field";
        label_element.setAttribute("type", "text");
        label_element.setAttribute("id", "new_input_label");

        //appending
        append_inside.appendChild(label_element);
        append_inside.appendChild(element);
        break;
      }

      case "radio": {
        //radio div
        radio_div.setAttribute("class", "radio_block");

        //label1
        label_element1.innerHTML = "Radio button";
        label_element1.setAttribute("type", "text");
        label_element1.setAttribute("id", "new_radio_label");

        //for input
        element.setAttribute("type", type);
        element.setAttribute("id", "new_radio");

        // //label2
        label_element.innerHTML = "Click here.";
        label_element.setAttribute("for", "new_radio");
        label_element.setAttribute("type", "text");
        label_element.setAttribute("id", "new_label");

        // //appending
        append_inside.appendChild(radio_div);
        radio_div.appendChild(label_element1);
        radio_div.appendChild(element);
        radio_div.appendChild(label_element);
        break;
      }

      case "button": {
        //for input
        element.setAttribute("type", type);
        element.setAttribute("value", type);
        element.setAttribute("id", "new_button");

        //label
        label_element.innerHTML = "Button";
        label_element.setAttribute("type", "text");
        label_element.setAttribute("id", "new_button_label");

        //appending
        append_inside.appendChild(label_element);
        append_inside.appendChild(element);
        break;
      }

      case "h1": {
        //Create h1 element
        h1_element.innerHTML = "H1 element";
        h1_element.setAttribute("id", "h1_element");

        //label
        label_element.innerHTML = "H1 tag";
        label_element.setAttribute("id", "new_h1_label");

        //Append
        append_inside.appendChild(label_element);
        append_inside.appendChild(h1_element);

        break;
      }

      default: {
        select_box.innerHTML =
          "<option value='option1'>option 1</option><option value='option2'>option 2</option> <option value='option3'>option 3</option>";

        //set attribute
        select_box.setAttribute("id", "new_select");

        //label
        label_element.innerHTML = "Selectbox";
        label_element.setAttribute("id", "new_select_label");

        //append
        append_inside.appendChild(label_element);
        append_inside.appendChild(select_box);
        break;
      }
    }
  }
}
