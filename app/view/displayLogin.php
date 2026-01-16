<h1>Login</h1>

<form action="/login" method="post">
    <label for="email">Email:</label>
    <input type="text" id="email" name="email"><br><br>
    <label for="password">Password:</label>
    <input type="text" id="password" name="password"><br><br>
    <input type="submit" value="Login">
</form>

<h1>Create Account</h1>

<form action="/login" method="post">
    <label for="email">Email:</label>
    <input type="text" id="email" name="email"><br><br>
    <label for="password">Password:</label>
    <input type="text" id="password" name="password"><br><br>
    <label for="confirmPassword">Confirm Password:</label>
    <input type="text" id="confirmPassword" name="confirmPassword"><br><br>
    <label for="firstName">First Name:</label>
    <input type="text" id="firstName" name="firstName"/><br><br>
    <label for="lastName">Last Name:</label>
    <input type="text" id="lastName" name="lastName"><br><br>
    <select name="jobTitle" id="jobTitle">
        <option value="banking_and_finance">Banking & Finance</option>
        <option value="biohazard_remediation">Bio-hazard Remediation</option>
        <option value="coverups">Cover-ups</option>
        <option value="human_resources">Human Resources</option>
        <option value="hypnotisation">Hypnotisation</option>
        <option value="intern">Intern</option>
        <option value="legal">Legal</option>
        <option value="management">Management</option>
        <option value="mass_surveillance">Mass Surveillance</option>
        <option value="project_management">Project Management</option>
        <option value="ritualistic_sacrifice">Ritualistic Sacrifice</option>
        <option value="sales">Sales</option>
        <option value="software_development">Software Development</option>
    </select><br><br>
    <input type="submit" value="Create Account">
</form>
