/* 
    1. Populate the table with id `employee-performance` with the data returned
       from the database. It does not have to be paginated. (5 points)
    2. Implement the delete logic in the predefined function. (10 points)
    3. When Edit button is clicked
      a. fetch the employee with clicked id from database (backend) (6 points)
      b. populate the modal (id `edit-employee-modal`) form with data returned from the backend (6 points)
      d. when user clicks "Save changes" button in the modal persist changes
         for that employee in the database (6 points)
   */
  





var EmployeesService = {
    init: function() {
        this.load_employees();
        this.setup_edit_form();
    },

    load_employees: function() {
        $.ajax({
            url: 'http://localhost/web-programming-final-adi/backend/rest/employees/performance',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                EmployeesService.populate_table(data);
            },
            error: function(xhr, status, error) {
                console.error('Error loading employees:', error);
                toastr.error('Failed to load employees data');
            }
        });
    },

    populate_table: function(employees) {
        var tbody = $('#employee-performance tbody');
        tbody.empty();

        employees.forEach(function(employee) {
            var row = `
                <tr>
                    <td class="text-center">
                        <div class="btn-group" role="group">
                            <button
                                type="button"
                                class="btn btn-warning"
                                onclick="EmployeesService.edit_employee(${employee.id})"
                            >
                                Edit
                            </button>
                            <button
                                type="button"
                                class="btn btn-danger"
                                onclick="EmployeesService.delete_employee(${employee.id})"
                            >
                                Delete
                            </button>
                        </div>
                    </td>
                    <td>${employee.full_name}</td>
                    <td>${employee.email}</td>
                    <td>${parseFloat(employee.total).toLocaleString('en-US', {minimumFractionDigits: 2, maximumFractionDigits: 2})}</td>
                </tr>
            `;
            tbody.append(row);
        });
    },

    delete_employee: function(employee_id) {
        if (confirm("Do you want to delete employee with the id " + employee_id + "?")) {
            $.ajax({
                url: 'http://localhost/web-programming-final-adi/backend/rest/employee/delete/' + employee_id,
                type: 'DELETE',
                dataType: 'json',
                success: function(response) {
                    toastr.success(response.message || 'Employee izbrisan uspjesnoo');
                    EmployeesService.load_employees(); 
                },
                error: function(xhr, status, error) {
                    console.error('Error deleting employee:', error);
                    toastr.error('Failed to delete employee');
                }
            });
        }
    },

    edit_employee: function(employee_id) {
    
        var row = $(`button[onclick="EmployeesService.edit_employee(${employee_id})"]`).closest('tr');
        var fullName = row.find('td').eq(1).text();
        var email = row.find('td').eq(2).text();
        
        var nameParts = fullName.split(' ');
        var firstName = nameParts[0] || '';
        var lastName = nameParts.slice(1).join(' ') || '';

        $('#employeeNumber').val(employee_id);
        $('#firstName').val(firstName);
        $('#lastName').val(lastName);
        $('#email').val(email);

        $('#edit-employee-modal').modal('show');
    },

    setup_edit_form: function() {
        $('#edit-employee-modal form').on('submit', function(e) {
            e.preventDefault();
            
            var employeeId = $('#employeeNumber').val();
            var formData = {
                first_name: $('#firstName').val(),
                last_name: $('#lastName').val(),
                email: $('#email').val()
            };

            $.ajax({
                url: 'http://localhost/web-programming-final-adi/backend/rest/employee/edit/' + employeeId,
                type: 'PUT',
                data: JSON.stringify(formData),
                contentType: 'application/json',
                dataType: 'json',
                success: function(response) {
                    toastr.success('Employee updated successfully');
                    $('#edit-employee-modal').modal('hide');
                    EmployeesService.load_employees(); 
                },
                error: function(xhr, status, error) {
                    console.error('Error updating employee:', error);
                    toastr.error('Failed to update employee');
                }
            });
        });
    }
};

$(document).ready(function() {
    EmployeesService.init();
});
