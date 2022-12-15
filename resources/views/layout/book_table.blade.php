@php
    
    $colspan = 2;
@endphp

<section class='book'>
    <div class="results">
        <table>
            <thead>
                <tr>
                    <th colspan={{ $colspan }}>{{ strtoupper($label) }}</th>
                </tr>
            </thead>

            <tr>
                <th>BOOK</th>
                <th>DATE REQUESTED</th>

               
            </tr>

            @forelse ($transactions as $transaction)
                <tr>
                    <td><a href="/book_preview/{{ $transaction->book_id }}"> {{ $transaction->book->title }}</a>
                    </td>
                    <td>
                        {{ date('M d, Y', strtotime($transaction->date_requested)) }}
                    </td>
                </tr>
        </table>
    </div>
</section>
