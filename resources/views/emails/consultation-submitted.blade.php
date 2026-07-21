<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultation Request Received</title>
</head>

<body style="margin:0;padding:0;background:#f4f4f5;font-family:Arial,Helvetica,sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" style="background:#f4f4f5;padding:40px 20px;">
    <tr>
        <td align="center">

            <table width="600" cellpadding="0" cellspacing="0" style="background:#ffffff;border-radius:12px;overflow:hidden;">

                <!-- Header -->
                <tr>
                    <td style="background:#06b6d4;padding:32px;text-align:center;">
                        <h1 style="margin:0;color:#ffffff;font-size:28px;">
                            LYNPHICS
                        </h1>
                    </td>
                </tr>

                <!-- Body -->
                <tr>
                    <td style="padding:40px;">

                        <h2 style="margin-top:0;color:#111827;">
    Hello {{ $consultation->full_name }},
</h2>

<p style="font-size:16px;line-height:1.8;color:#4b5563;">
    Thank you for choosing <strong>LYNPHICS Business Modernisation</strong>.
</p>

<p style="font-size:16px;line-height:1.8;color:#4b5563;">
    We've successfully received your consultation request and our team will carefully review the information you've shared.
</p>

                      

                        <p style="font-size:16px;line-height:1.8;color:#4b5563;">
                            We aim to contact you within <strong>24 hours</strong> using your preferred contact method.
                        </p>

                        <hr style="margin:40px 0;border:none;border-top:1px solid #e5e7eb;">

                        <h3 style="color:#111827;margin-bottom:20px;">
                            Your Submission
                        </h3>

                        <table width="100%" cellpadding="8" cellspacing="0">

                            <tr>
                                <td><strong>Business</strong></td>
                                <td>{{ $consultation->business_name ?? 'Not provided' }}</td>
                            </tr>

                            <tr>
                                <td><strong>Email</strong></td>
                                <td>{{ $consultation->email ?? 'Not provided' }}</td>
                            </tr>

                            <tr>
                                <td><strong>Phone</strong></td>
                                <td>{{ $consultation->phone ?? 'Not provided' }}</td>
                            </tr>

                            <tr>
                                <td><strong>Industry</strong></td>
                                <td>{{ $consultation->industry ?? 'Not provided' }}</td>
                            </tr>

                            <tr>
                                <td><strong>Company Size</strong></td>
                                <td>{{ $consultation->company_size ?? 'Not provided' }}</td>
                            </tr>

                            <tr>
                                <td><strong>Website / Social Media</strong></td>
                                <td>{{ $consultation->website ?? 'Not provided' }}</td>
                            </tr>

                            <tr>
                                <td><strong>Preferred Contact Method</strong></td>
                                <td>{{ $consultation->preferred_contact_method ?? 'Not provided' }}</td>
                            </tr>

                            <tr>
                                <td><strong>Referral Source</strong></td>
                                <td>{{ $consultation->referral_source ?? 'Not provided' }}</td>
                            </tr>

                            <tr>
                                <td><strong>Timeline</strong></td>
                                <td>{{ $consultation->timeline ?? 'Not provided' }}</td>
                            </tr>

                            <tr>
                                <td><strong>Investment Range</strong></td>
                                <td>{{ $consultation->investment_range ?? 'Not provided' }}</td>
                                
                            </tr>

                            <tr>
    <td><strong>Reference</strong></td>
    <td>#CONS-{{ str_pad($consultation->id, 5, '0', STR_PAD_LEFT) }}</td>
</tr>

                            <tr>
                                <td><strong>Submitted</strong></td>
                                <td>{{ $consultation->created_at->format('F j, Y \a\t g:i A') }}</td>
                            </tr>

                        </table>

                        <hr style="margin:40px 0;border:none;border-top:1px solid #e5e7eb;">

                        <h3 style="margin-bottom:20px;color:#111827;">
                            Business Challenge
                        </h3>

                        <div style="background:#f9fafb;border:1px solid #e5e7eb;border-radius:8px;padding:20px;color:#4b5563;font-size:15px;line-height:1.8;">
                            {!! $consultation->business_challenge
                                ? nl2br(e($consultation->business_challenge))
                                : 'No business challenge was provided.' !!}
                        </div>

                        <hr style="margin:40px 0;border:none;border-top:1px solid #e5e7eb;">

                        <h3 style="margin-bottom:20px;color:#111827;">
                            Consultation Interests
                        </h3>

                        @if($consultation->consultationInterests->isNotEmpty())

                            @foreach($consultation->consultationInterests->groupBy('category') as $category => $interests)

                                <h4 style="margin:20px 0 10px;color:#06b6d4;">
                                    {{ $category }}
                                </h4>

                                <ul style="margin:0 0 20px 20px;padding:0;color:#4b5563;line-height:1.8;">
                                    @foreach($interests as $interest)
                                        <li>{{ $interest->interest }}</li>
                                    @endforeach
                                </ul>

                            @endforeach

                        @else

                            <p style="color:#4b5563;">
                                No consultation interests selected.
                            </p>

                        @endif

                        <p style="margin-top:40px;font-size:16px;line-height:1.8;color:#4b5563;">
                            Thank you again for choosing LYNPHICS. We look forward to helping modernize and grow your business.
                        </p>

                        <!-- CTA Button -->
                        <table role="presentation" cellpadding="0" cellspacing="0" border="0" align="center" style="margin:35px auto;">
                            <tr>
                                <td align="center" bgcolor="#06b6d4" style="border-radius:8px;">
                                    <a role="button" 
                                       href="https://lynphics.com"
                                       target="_blank"
                                       style="display:inline-block;padding:14px 28px;font-size:16px;font-weight:bold;color:#ffffff;text-decoration:none;">
                                        Explore Our Services
                                    </a>
                                </td>
                            </tr>


                        </table>

                    </td>
                </tr>

                <!-- Footer -->
                <tr>
                    <td style="background:#111827;padding:24px;text-align:center;">
                        <p style="margin:0;color:#9ca3af;font-size:13px;line-height:1.6;">
                            © {{ date('Y') }} LYNPHICS. All rights reserved.<br>
                            Modernizing businesses through technology, design, and systems.
                        </p>

<p style="margin-top:30px;font-size:14px;color:#6b7280;text-align:center;">
    Questions?<br>

    <a
        href="mailto:info@lynphics.com"
        style="color:#06b6d4;text-decoration:none;">
        info@lynphics.com
    </a>
</p>


                    </td>
                </tr>
            </table>

        </td>
    </tr>
</table>
</body>
</html>