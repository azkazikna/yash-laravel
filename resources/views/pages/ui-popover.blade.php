@extends('layouts/master')

@section('title', 'User')

@section('vendor-style')
     
@endsection

@section('vendor-script')
    <!-- Required vendors -->
     
	<script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
@endsection

@section('page-script')
    <!-- code-highlight -->
    <script src="{{ asset('assets/js/highlight.min.js') }}"></script>
    <script>hljs.highlightAll();
        hljs.configure({ ignoreUnescapedHTML: true })
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            document.querySelectorAll('pre code').forEach((el) => {
                hljs.highlightElement(el);
            });
        });
    </script>
@endsection

@section('content')
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title">Bootstrap popover</h4>
			</div>
			<div class="card-body">

				<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam laborum dolorum culpa a maiores officia ab. Cumque necessitatibus voluptates soluta, ullam numquam nulla. Et a architecto veritatis sint, autem cupiditate
					iure illo pariatur eum, praesentium numquam ea quaerat ipsam? Corrupti nobis illo itaque quae, qui numquam vero ipsa, reiciendis sit repudiandae molestiae natus vel voluptatibus exercitationem ducimus neque harum ad,
					commodi excepturi repellat eos fugiat minus eius. Doloremque itaque repudiandae saepe quia temporibus? Vitae, reprehenderit aliquam facilis qui at quis provident in maiores illo laborum, voluptatem recusandae cupiditate
					nemo. Nulla iusto ad consequatur reprehenderit quod accusamus, vitae, blanditiis quae ut tenetur nobis animi dolorum consectetur dignissimos amet illo provident nam obcaecati eligendi molestias tempora? Ad nam nobis
					eaque consequatur tempore tenetur eius ipsum reprehenderit dignissimos inventore. Id recusandae nemo dicta rerum. Distinctio itaque, veniam dolore inventore aliquid assumenda neque. Deserunt!
				</p>
				<div class="bootstrap-popover-wrapper">
					<div class="bootstrap-popover d-inline-block">
						<button type="button" class="btn btn-primary btn-sm px-4 " data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor." title="Popover in Left">Left</button>
					</div>
					<div class="bootstrap-popover d-inline-block">
						<button type="button" class="btn btn-primary btn-sm px-4 " data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor." title="Popover in Right">Top</button>
					</div>
					<div class="bootstrap-popover d-inline-block">
						<button type="button" class="btn btn-primary btn-sm px-4 " data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor." title="Popover in Bottom">Bottom</button>
					</div>
					<div class="bootstrap-popover d-inline-block">
						<button type="button" class="btn btn-primary btn-sm px-4 " data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor." title="Popover in Right">Right</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection