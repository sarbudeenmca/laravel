@extends('layouts.default')
@section('title', 'Sarbudeen - Contact Us')
@section('main-content')
    <section id="container">
        <div class="content1">
            <h2>Mobile</h2>
            {{-- without htmlentities not secure in direct php echo --}}
            <p><?php echo $mobile; ?></p>
            {{-- htmlentities --}}
            <p><?php echo htmlentities($mobile); ?></p>
            {{-- htmlentities default in blade --}}
            <p>{{ $mobile }}</p>
            {{--  --}}
            <p>{!! $mobile !!}</p>
        </div>

        <div class="content2">
            <h2>Contact Us</h2>
            <p>
                @if ($users == 0)
                    0 users
                @elseif ($users == 1)
                    We have only One user
                @else
                    We have many users
                @endif

                @unless ($notAdmin)
                    <br><br>Admin Controls
                @endunless

                @isset($settings)
                    <br><br>{{ $settings }}
                @endisset
            </p>
        </div>

        <div class="content3">
            <h2>Email</h2>
            <p>{!! $email !!}</p>
        </div>
    </section>
@endsection
