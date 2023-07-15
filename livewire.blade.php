<div>
    <div>
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#showEnterCodeModal">Open Modal</button>
    </div>
    <div class="modal fade" tabindex="-1" id="showEnterCodeModal" wire:ignore.self>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body modal-body-lg text-center">
                    <form wire:submit.prevent="addStudentData">
                        <div class="form-floating mt-3">
                            <input type="number" class="form-control" id="student-id" placeholder="Student ID">
                            <label for="student-id">Student ID</label>
                        </div>

                        <div class="form-floating mt-3">
                            <input type="text" class="form-control" id="student-name" placeholder="Student Name">
                            <label for="student-name">Student Name</label>
                        </div>

                        <div class="form-floating mt-3">
                            <input type="email" class="form-control" id="student-email"
                                placeholder="name@example.com">
                            <label for="student-email">Student Email</label>
                        </div>

                        <div class="form-floating mt-3">
                            <input type="number" class="form-control" id="student-phone" placeholder="Student Phone">
                            <label for="student-phone">Student Phone</label>
                        </div>

                        <div class="modal-footer mt-3">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@push('scripts')
    <script>
        $(document).ready(function() {
            window.addEventListener('close-modal', event => {
                console.log("listen 1");

            });
            $("#showEnterCodeModal").on('close-modal', function () {
                console.log('listen 2');
                // livewire.emit('onCloseModal');
            });
        });
    </script>
@endpush