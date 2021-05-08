<div align="center">
    <a href="https://github.com/cp3402-students/cp3402-2021-site-cp3402-2021-team04">
    <img src="documentationResources/TJC-Logo.jpg" alt="Logo" width="250" height="250">
    </a>

<h1>Deployment Details</h1>
</div>
<hr/>

<h2>Our Git Flow</h2>

<h3>Branch Usage</h3>
<p>Our development process makes use of modern Git Flow web design principles to use aa series of branches to ensure seamless integration between multiple team members.</p>

<h4>Naming Convention</h4>
<code >(type)---descritpive-name-in-lowercase</code>

<h4>Types</h4>
<ul>
    <li><code>(develop)</code> - Develop branches are for tracking changes of the next theme version.</li>
    <li><code>(feature)</code> - Feature branches are for tracking changes made to a specific theme feature e.g. navigation.</li>
    <li><code>(utility)</code> - Utility branches are for pushing a new theme version to a web server.</li>
</ul>

<h4>Structure</h4>

<h5>Permanent Branches</h5>
<ul>
    <li><code>(utility)---push-to-staging</code> - Current version of theme on the <a href="#">staging</a> site.</li>
    <li><code>(utility)---push-to-production</code> - Current version of the theme on the <a href="#">production</a> site.</li>
    <li><code>main</code> - Parent branch used as an archive of all history.</li>
</ul>

<p>
    Both branches <code>(utility)---push-to-staging</code> and <code>(utility)---push-to-production</code> have webhooks setup. 
    These webhooks will be triggered when a commit occurs on either of these branches and will pushing the new theme version to the respective web server .
</p>

<h5>Version Branches</h5>
<ul>
    <li><code>(develop)</code> - One develop branch is created per version iteration.</li>
    <li><code>(feature)</code> - One feature branch is created per new feature being added in each iteration.</li>
</ul>

<h4>How to start a new development version</h4>
<ol>
    <li>Create a <code>(develop)</code> branch from <code>main</code> e.g. <code>(develop)---refactor-mobile-display</code></li>
    <li>From the new <code>(develop)</code> branch checkout a <code>(feature)</code> branch/es e.g. <code>(feature)---redesign-mobile-menu</code></li>
    <li>Checkout the new <code>(feature)---redesign-mobile-menu</code> branch and begin work!</li>
</ol>

<h4>How to merge branches</h4>
<ol>
    <li>Once you are happy with your changes on your <code>(feature)</code> branch, you can go ahead and open a pull request.</li>
    <li>Navigate to the "<a href="https://github.com/cp3402-students/cp3402-2021-site-cp3402-2021-team04/pulls">Pull Requests</a>" tab on Github.</li>
    <li>Select "<b>New Pull Request"</b>.</li>
    <li>Set the <code>base</code> branch to the <code>(develop)</code> branch you created earlier e.g. <code>(develop)---refactor-mobile-display</code>.</li>
    <li>Set the <code>compare</code> branch to the <code>(feature)</code> branch you have made your changes on e.g. <code>(feature)---redesign-mobile-menu</code>.</li>
    <li>Select "<b>Create Pull Request</b>".</li>
    <li>Write a descriptive message, set your team as reviewers and select "<b>Create Pull Request</b>".</li>
    <li>Wait for your team to review your changes.</li>
    <li>If they identify any issues, fix these and ask them to review these changes.</li>
    <li>Once everyone approves, select "<b>Merge Pull Request</b>" and delete the branch.</li>
</ol>

<h4>Frequently Asked Questions</h4>
<ul>
    <li>"How do I know which branch I should be working on?"
        <ul>
            <li>If you are working on a new feature you should have the related <code>(feature)</code> branch checked out.</li>
        </ul>
    </li>
    <li>"We have merged the <code>(feature)</code> branches back into the <code>(develop)</code> branch but I need to make a few quick changes. Can I just work directly on the <code>(develop)</code> branch?"
        <ul>
            <li>You should never commit changes directly to the <code>(develop)</code> branch, we use <code>(feature)</code> branches and pull requests so that others must approve the changes no matter how small.</li>
        </ul>
    </li>
    <li>"I have just checked out a new branch, now what?"
        <ul>
            <li>After checking out a new branch it's always a good idea to <code>Git -> Pull</code> to ensure you have the latest version of branch.</li>
        </ul>
    </li>
</ul>