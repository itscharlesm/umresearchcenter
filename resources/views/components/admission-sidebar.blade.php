<div class="content-sidebar">
    <h5><b>ADMISSIONS</b></h5>
    <a href="{{ route('admission.about-admission') }}"
        class="{{ $activePage == 'requirements' ? 'active' : '' }}">Requirements</a>
    <a href="{{ route('admission.about-guidelines') }}"
        class="{{ $activePage == 'guidelines' ? 'active' : '' }}">Registration Guidelines</a>
    <a href="{{ route('admission.about-grading') }}" class="{{ $activePage == 'grading' ? 'active' : '' }}">Grading
        System</a>
    <a href="{{ route('admission.about-enrollment') }}" class="{{ $activePage == 'enrollment' ? 'active' : '' }}">
        Online Enrollment
    </a>
</div>
