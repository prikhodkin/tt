WebP Express 0.19.0. Conversion triggered with the conversion script (wod/webp-on-demand.php), 2020-11-18 22:55:11

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.4.2
- Server software: Apache

Stack converter ignited
Destination folder does not exist. Creating folder: [doc-root]/app/webp-express/webp-images/themes/banks/resources/assets/img/favicons

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/app/themes/banks/resources/assets/img/favicons/favicon-32x32.png
- destination: [doc-root]/app/webp-express/webp-images/themes/banks/resources/assets/img/favicons/favicon-32x32.png.webp
- log-call-arguments: true
- converters: (array of 10 items)

The following options have not been explicitly set, so using the following defaults:
- converter-options: (empty array)
- shuffle: false
- preferred-converters: (empty array)
- extra-converters: (empty array)

The following options were supplied and are passed on to the converters in the stack:
- alpha-quality: 85
- encoding: "auto"
- metadata: "none"
- near-lossless: 60
- quality: 85
------------


*Trying: cwebp* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/app/themes/banks/resources/assets/img/favicons/favicon-32x32.png
- destination: [doc-root]/app/webp-express/webp-images/themes/banks/resources/assets/img/favicons/favicon-32x32.png.webp
- alpha-quality: 85
- encoding: "auto"
- low-memory: true
- log-call-arguments: true
- metadata: "none"
- method: 6
- near-lossless: 60
- quality: 85
- use-nice: true
- command-line-options: ""
- try-common-system-paths: true
- try-supplied-binary-for-os: true

The following options have not been explicitly set, so using the following defaults:
- auto-filter: false
- default-quality: 85
- max-quality: 85
- preset: "none"
- size-in-percentage: null (not set)
- skip: false
- rel-path-to-precompiled-binaries: *****
- try-cwebp: true
- try-discovering-cwebp: true
------------

Encoding is set to auto - converting to both lossless and lossy and selecting the smallest file

Converting to lossy
Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version 2>&1. Result: version: *1.1.0*
We could get the version, so yes, a plain cwebp call works
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 0 binaries
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 1 binaries: 
- /usr/local/bin/cwebp
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (Darwin)... We do.
Found 1 binaries: 
- [doc-root]/app/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-mac-10_15
Detecting versions of the cwebp binaries found
- Executing: cwebp -version 2>&1. Result: version: *1.1.0*
- Executing: /usr/local/bin/cwebp -version 2>&1. Result: version: *1.1.0*
- Executing: [doc-root]/app/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-mac-10_15 -version 2>&1. Result: version: *1.1.0*
Binaries ordered by version number.
- cwebp: (version: 1.1.0)
- /usr/local/bin/cwebp: (version: 1.1.0)
- [doc-root]/app/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-mac-10_15: (version: 1.1.0)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 1.1.0
Quality: 85. 
The near-lossless option ignored for lossy
Trying to convert by executing the following command:
nice cwebp -metadata none -q 85 -alpha_q '85' -m 6 -low_memory '[doc-root]/app/themes/banks/resources/assets/img/favicons/favicon-32x32.png' -o '[doc-root]/app/webp-express/webp-images/themes/banks/resources/assets/img/favicons/favicon-32x32.png.webp.lossy.webp' 2>&1 2>&1

*Output:* 
nice: cwebp: No such file or directory

Exec failed (return code: 127)
Creating command line options for version: 1.1.0
The near-lossless option ignored for lossy
Trying to convert by executing the following command:
nice /usr/local/bin/cwebp -metadata none -q 85 -alpha_q '85' -m 6 -low_memory '[doc-root]/app/themes/banks/resources/assets/img/favicons/favicon-32x32.png' -o '[doc-root]/app/webp-express/webp-images/themes/banks/resources/assets/img/favicons/favicon-32x32.png.webp.lossy.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]/app/webp-express/webp-images/themes/banks/resources/assets/img/favicons/favicon-32x32.png.webp.lossy.webp'
File:      [doc-root]/app/themes/banks/resources/assets/img/favicons/favicon-32x32.png
Dimension: 32 x 32 (with alpha)
Output:    1468 bytes Y-U-V-All-PSNR 40.20 37.27 37.05   38.94 dB
           (11.47 bpp)
block count:  intra4:          4  (100.00%)
              intra16:         0  (0.00%)
              skipped:         0  (0.00%)
bytes used:  header:             88  (6.0%)
             mode-partition:     27  (1.8%)
             transparency:      684 (58.3 dB)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |     435 |       0 |       0 |       0 |     435  (29.6%)
 intra16-coeffs:  |       0 |       0 |       0 |       0 |       0  (0.0%)
  chroma coeffs:  |     176 |       0 |       0 |       0 |     176  (12.0%)
    macroblocks:  |      100%|       0%|       0%|       0%|       4
      quantizer:  |      14 |      14 |      14 |      14 |
   filter level:  |       4 |       4 |       4 |       4 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |     611 |       0 |       0 |       0 |     611  (41.6%)
Lossless-alpha compressed size: 683 bytes
  * Header size: 49 bytes, image data size: 634
  * Precision Bits: histogram=3 transform=3 cache=0
  * Palette size:   129

Success
Reduction: 39% (went from 2406 bytes to 1468 bytes)

Converting to lossless
Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version 2>&1. Result: version: *1.1.0*
We could get the version, so yes, a plain cwebp call works
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 0 binaries
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 1 binaries: 
- /usr/local/bin/cwebp
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (Darwin)... We do.
Found 1 binaries: 
- [doc-root]/app/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-mac-10_15
Detecting versions of the cwebp binaries found
- Executing: cwebp -version 2>&1. Result: version: *1.1.0*
- Executing: /usr/local/bin/cwebp -version 2>&1. Result: version: *1.1.0*
- Executing: [doc-root]/app/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-mac-10_15 -version 2>&1. Result: version: *1.1.0*
Binaries ordered by version number.
- cwebp: (version: 1.1.0)
- /usr/local/bin/cwebp: (version: 1.1.0)
- [doc-root]/app/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-mac-10_15: (version: 1.1.0)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 1.1.0
Trying to convert by executing the following command:
nice cwebp -metadata none -q 85 -alpha_q '85' -near_lossless 60 -m 6 -low_memory '[doc-root]/app/themes/banks/resources/assets/img/favicons/favicon-32x32.png' -o '[doc-root]/app/webp-express/webp-images/themes/banks/resources/assets/img/favicons/favicon-32x32.png.webp.lossless.webp' 2>&1 2>&1

*Output:* 
nice: cwebp: No such file or directory

Exec failed (return code: 127)
Creating command line options for version: 1.1.0
Trying to convert by executing the following command:
nice /usr/local/bin/cwebp -metadata none -q 85 -alpha_q '85' -near_lossless 60 -m 6 -low_memory '[doc-root]/app/themes/banks/resources/assets/img/favicons/favicon-32x32.png' -o '[doc-root]/app/webp-express/webp-images/themes/banks/resources/assets/img/favicons/favicon-32x32.png.webp.lossless.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]/app/webp-express/webp-images/themes/banks/resources/assets/img/favicons/favicon-32x32.png.webp.lossless.webp'
File:      [doc-root]/app/themes/banks/resources/assets/img/favicons/favicon-32x32.png
Dimension: 32 x 32
Output:    1742 bytes (13.61 bpp)
Lossless-ARGB compressed size: 1742 bytes
  * Header size: 144 bytes, image data size: 1573
  * Precision Bits: histogram=2 transform=2 cache=9

Success
Reduction: 28% (went from 2406 bytes to 1742 bytes)

Picking lossy
cwebp succeeded :)

Converted image in 386 ms, reducing file size with 39% (went from 2406 bytes to 1468 bytes)
