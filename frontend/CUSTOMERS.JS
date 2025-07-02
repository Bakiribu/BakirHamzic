/* 
    1. Populate the <select> HTML element with the id `customers-list` with all 
       customers from the database (15 points)
    2. When the select list item changes (other customer is selected) fetch all 
       meals for the selected customer and populate the table with the id `customer-meals`
       with the meals you get from the database (15 points)
    3. Use the modal with id `add-customer-modal` to add customer to the database. (15 points)
    3.1. After the customer has been added successfully, refresh the list of customers
         in the select list with the id `customers-list` (5 points)

         
   */    OVO PISE U CUSTOMERS.HTML





var CustomersService = {
  getAll: callback => RestClient.get("/customers", callback),
  getMeals: (id, callback) => RestClient.get("/customer/meals/" + id, callback),
  add: (data, callback) => RestClient.post("/customers/add", data, callback),
};

$(document).ready(function () {
  function loadCustomers() {
    CustomersService.getAll(customers => {
      let options = '<option selected>Please select one customer</option>';
      customers.forEach(c => {
        options += `<option value="${c.id}">${c.first_name} ${c.last_name}</option>`;
      });
      $("#customers-list").html(options);
    });
  }

  loadCustomers();

  $("#customers-list").on("change", function () {
    const id = $(this).val();
    if (!id || id === "Please select one customer") return;

    CustomersService.getMeals(id, meals => {
      let rows = "";
      meals.forEach(m => {
        rows += `<tr><td>${m.food_name}</td><td>${m.food_brand}</td><td>${m.meal_date}</td></tr>`;
      });
      $("#customer-meals tbody").html(rows);
    });
  });

  $("#add-customer-modal form").on("submit", function (e) {
    e.preventDefault();
    const data = {
      first_name: $("#first_name").val(),
      last_name: $("#last_name").val(),
      birth_date: $("#birth_date").val(),
    };
    CustomersService.add(data, () => {
      loadCustomers();
      this.reset();
      $("#add-customer-modal").modal("hide");
      toastr.success("Customer added successfully!");
    });
  });
});
