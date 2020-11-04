@extends('layouts.app')

@section('content')
<div class="content content-components">
  <div class="container">
    <ol class="breadcrumb df-breadcrumbs mg-b-10">
      <li class="breadcrumb-item"><a href="#">Components</a></li>
      <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
      <li class="breadcrumb-item active" aria-current="page">Buttons</li>
    </ol>

    <h1 class="df-title">Buttons</h1>
    <p class="df-lead">Use Bootstrap’s custom button styles for actions in forms, dialogs, and more with support for multiple sizes, states, and more. Read the <a href="https://getbootstrap.com/docs/4.2/components/buttons/" target="_blank">Official Bootstrap Documentation</a> for a full list of instructions and other options.</p>

    <hr class="mg-y-40">

    <h4 id="section1" class="mg-b-10">Basic Styling</h4>
    <p class="mg-b-30">Bootstrap includes several predefined button styles, each serving its own semantic purpose, with a few extras thrown in for more control.</p>

    <div data-label="Example" class="df-example">
      <div class="demo-btn-group">
        <button type="button" class="btn btn-primary">Primary</button>
        <button type="button" class="btn btn-secondary">Secondary</button>
        <button type="button" class="btn btn-success">Success</button>
        <button type="button" class="btn btn-danger">Danger</button>
        <button type="button" class="btn btn-warning">Warning</button>
        <button type="button" class="btn btn-info">Info</button>
        <button type="button" class="btn btn-light">Light</button>
        <button type="button" class="btn btn-dark">Dark</button>
      </div><!-- demo-btn-group -->
    </div><!-- df-example -->
    <pre><code class="language-html">&lt;button type="button" class="btn btn-primary"&gt;Button&lt;/button&gt;</code></pre>

    <div class="table-responsive mg-t-25">
      <table class="table table-components">
        <thead>
          <tr>
            <th class="wd-40p">Class Reference</th>
            <th class="wd-60p">Value</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>class="btn btn-[value]"</td>
            <td>primary | secondary | success | danger | warning | info | light | dark</td>
          </tr>
        </tbody>
      </table>
    </div><!-- table-responsive -->

    <hr class="mg-y-40">

    <h4 id="section2" class="mg-b-10">Outline Buttons</h4>
    <p class="mg-b-30">In need of a button, but not the hefty background colors they bring? Replace the default modifier classes with the <code>.btn-outline-*</code> ones to remove all background images and colors on any button.</p>

    <div data-label="Example" class="df-example">
      <div class="demo-btn-group">
        <button type="button" class="btn btn-outline-primary">Primary</button>
        <button type="button" class="btn btn-outline-secondary">Secondary</button>
        <button type="button" class="btn btn-outline-success">Success</button>
        <button type="button" class="btn btn-outline-danger">Danger</button>
        <button type="button" class="btn btn-outline-warning">Warning</button>
        <button type="button" class="btn btn-outline-info">Info</button>
        <button type="button" class="btn btn-outline-light">Light</button>
        <button type="button" class="btn btn-outline-dark">Dark</button>
      </div><!-- demo-btn-group -->
    </div><!-- df-example -->
    <pre><code class="language-html">&lt;button type="button" class="btn btn-outline-primary"&gt;Button&lt;/button&gt;</code></pre>

    <div class="table-responsive mg-t-25">
      <table class="table table-components">
        <thead>
          <tr>
            <th class="wd-40p">Class Reference</th>
            <th class="wd-60p">Value</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>class="btn btn-outline-[value]"</td>
            <td>primary | secondary | success | danger | warning | info | light | dark</td>
          </tr>
        </tbody>
      </table>
    </div><!-- table-responsive -->


    <hr class="mg-y-40">

    <h4 id="section3" class="mg-b-10">Sizes</h4>
    <p class="mg-b-30">Button can have additional sizes like larger or smaller buttons.</p>

    <div data-label="Example" class="df-example">
      <div class="demo-btn-group">
        <button type="button" class="btn btn-xs btn-primary">Extra Small</button>
        <button type="button" class="btn btn-sm btn-primary">Small</button>
        <button type="button" class="btn btn-primary">Normal</button>
        <button type="button" class="btn btn-lg btn-primary">Large Button</button>
      </div><!-- demo-btn-group -->
    </div><!-- df-example -->
    <pre><code class="language-html">&lt;button type="button" class="btn btn-xs btn-primary">Extra Small&lt;/button&gt;
&lt;button type="button" class="btn btn-sm btn-primary">Small&lt;/button&gt;
&lt;button type="button" class="btn btn-primary">Normal&lt;/button&gt;
&lt;button type="button" class="btn btn-lg btn-primary">Large Button&lt;/button&gt;</code></pre>

    <hr class="mg-t-50 mg-b-40">

    <h4 id="section4" class="mg-b-10">Full Width</h4>
    <p class="mg-b-30">Create block level buttons—those that span the full width of a parent</p>

    <div data-label="Example" class="df-example">
      <button type="button" class="btn btn-primary btn-block">Primary</button>
      <button type="button" class="btn btn-secondary btn-block">Secondary</button>
    </div><!-- df-example -->
    <pre><code class="language-html">&lt;button type="button" class="btn btn-primary btn-block"&gt;Button&lt;/button&gt;</code></pre>

    <hr class="mg-t-50 mg-b-40">

    <h4 id="section5" class="mg-b-10">Active State</h4>
    <p class="mg-b-30">Buttons will appear pressed (with a darker background, darker border, and inset shadow) when active and also by adding <code>.active</code> class.</p>

    <div data-label="Example" class="df-example">
      <button type="button" class="btn btn-primary active">Primary</button>
      <button type="button" class="btn btn-success active">Success</button>
    </div><!-- df-example -->
    <pre><code class="language-html">&lt;button type="button" class="btn btn-primary active"&gt;Button&lt;/button&gt;</code></pre>

    <hr class="mg-t-50 mg-b-40">

    <h4 id="section6" class="mg-b-10">Disabled State</h4>
    <p class="mg-b-30">Make buttons look inactive by adding the disabled boolean attribute to any button element.</p>

    <div data-label="Example" class="df-example">
      <button type="button" class="btn btn-primary" disabled>Primary Button</button>
      <button type="button" class="btn btn-success" disabled>Success Button</button>
    </div><!-- df-example -->
    <pre><code class="language-html">&lt;button type="button" class="btn btn-primary" disabled&gt;Primary Button&lt;/button&gt;
&lt;button type="button" class="btn btn-success" disabled&gt;Success Button&lt;/button&gt;</code></pre>

    <hr class="mg-t-50 mg-b-40">

    <h4 id="section7" class="mg-b-10">Rounded Corner</h4>
    <p class="mg-b-30">Make rounded corner buttons by adding a class modifier from Bootstrap utilities class <code>.rounded-pill</code></p>
    <div data-label="Example" class="df-example">
      <button type="button" class="btn btn-primary rounded-pill">Primary Button</button>
      <button type="button" class="btn btn-secondary rounded-pill">Secondary Button</button>
    </div><!-- df-example -->
    <pre><code class="language-html">&lt;button type="button" class="btn btn-primary rounded-pill"&gt;Primary Button&lt;/button&gt;
&lt;button type="button" class="btn btn-success rounded-pill"&gt;Success Button&lt;/button&gt;</code></pre>

    <hr class="mg-t-50 mg-b-40">

    <h4 id="section8" class="mg-b-10">Icon Buttons</h4>
    <p class="mg-b-30">Make icon buttons by adding only icon and add class modifier using <code>.btn-icon</code></p>
    <div data-label="Example" class="df-example">
      <div class="btn-toolbar">
        <div>
          <button type="button" class="btn btn-primary btn-icon"><i data-feather="arrow-left"></i></button>
          <button type="button" class="btn btn-secondary btn-icon"><i data-feather="arrow-right"></i></button>
        </div>

        <div class="mg-l-15">
          <button type="button" class="btn btn-success btn-icon"><i data-feather="grid"></i></button>
          <button type="button" class="btn btn-danger btn-icon"><i data-feather="menu"></i></button>
        </div>
      </div><!-- btn-toolbar -->
    </div><!-- df-example -->
    <pre><code class="language-html">&lt;button type="button" class="btn btn-primary btn-icon"&gt;
&lt;i data-feather="arrow-left"&gt;&lt;/i&gt;
&lt;/button&gt;</code></pre>

    <footer class="content-footer">
      <div>
        <span>&copy; 2019 DashForge v1.0.0. </span>
        <span>Made by <a href="http://themepixels.me">ThemePixels</a></span>
      </div>
      <div>
        <nav class="nav">
          <a href="https://themeforest.net/licenses/standard" class="nav-link">Licenses</a>
          <a href="../change-log.html" class="nav-link">Change Log</a>
          <a href="https://discordapp.com/invite/RYqkVuw" class="nav-link">Get Help</a>
        </nav>
      </div>
    </footer><!-- content-footer -->
  </div><!-- container -->
</div><!-- content -->
@endsection