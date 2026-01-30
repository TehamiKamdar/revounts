@extends('admin.layout.master')

@section('content')
<div class="content-page">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <h3 id="status_response"></h3>
                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                <thead>
                                <tr>
									<th>Sr</th>
                                    <th>Store</th>
                                    <th>Heading</th>
                                    <th>Published On</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody id="update_table_blog">
                                    @foreach ($reviews as $key => $review)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $review->storeRelation->name ?? '' }}</td>
                                            <td>{{ $review->product }}</td>
                                            <td>{{ $review->date }}</td>
                                            <td>
                                                <button type="button" class="btn btn-danger" onclick="deleteReview({{ $review->id }})">
                                                    Delete
                                                </button>
                                                {{-- <a href="{{ route('revounts_cms.reviews.edit', $review->id) }}"
                                                class="btn btn-primary">
                                                    Edit
                                                </a> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

							</div>
                    </div>
                </div>


<div id="full-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
</div><!-- /.modal -->



            </div> <!-- container -->

        </div> <!-- content -->

        <footer class="footer">
            © 2016. All rights reserved.
        </footer>

    </div>
@endsection

@push('custom-scripts')
<script>
    function deleteReview(id) {
        if(!confirm('Are you sure?')) return;

        fetch(`/revounts_cms/reviews/${id}`, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Accept': 'application/json'
            }
        })
        .then(res => res.json())
        .then(data => {
            if(data.success){
                alert(data.message);
                location.reload(); // or remove row dynamically
            } else {
                alert('Failed to delete!');
            }
        });
    }
</script>
@endpush