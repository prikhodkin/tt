WebP Express 0.19.0. Conversion triggered with the conversion script (wod/webp-on-demand.php), 2020-11-18 22:55:59

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.4.2
- Server software: Apache

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/app/themes/banks/resources/assets/img/vk.png
- destination: [doc-root]/app/webp-express/webp-images/themes/banks/resources/assets/img/vk.png.webp
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
- source: [doc-root]/app/themes/banks/resources/assets/img/vk.png
- destination: [doc-root]/app/webp-express/webp-images/themes/banks/resources/assets/img/vk.png.webp
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
nice cwebp -metadata none -q 85 -alpha_q '85' -m 6 -low_memory '[doc-root]/app/themes/banks/resources/assets/img/vk.png' -o '[doc-root]/app/webp-express/webp-images/themes/banks/resources/assets/img/vk.png.webp.lossy.webp' 2>&1 2>&1

*Output:* 
nice: cwebp: No such file or directory

Exec failed (return code: 127)
Creating command line options for version: 1.1.0
The near-lossless option ignored for lossy
Trying to convert by executing the following command:
nice /usr/local/bin/cwebp -metadata none -q 85 -alpha_q '85' -m 6 -low_memory '[doc-root]/app/themes/banks/resources/assets/img/vk.png' -o '[doc-root]/app/webp-express/webp-images/themes/banks/resources/assets/img/vk.png.webp.lossy.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]/app/webp-express/webp-images/themes/banks/resources/assets/img/vk.png.webp.lossy.webp'
File:      [doc-root]/app/themes/banks/resources/assets/img/vk.png
Dimension: 45 x 40
Output:    438 bytes Y-U-V-All-PSNR 43.50 45.66 46.19   44.17 dB
           (1.95 bpp)
block count:  intra4:          9  (100.00%)
              intra16:         0  (0.00%)
              skipped:         0  (0.00%)
bytes used:  header:             21  (4.8%)
             mode-partition:     43  (9.8%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |     307 |       0 |       0 |       0 |     307  (70.1%)
 intra16-coeffs:  |       0 |       0 |       0 |       0 |       0  (0.0%)
  chroma coeffs:  |      36 |       0 |       0 |       0 |      36  (8.2%)
    macroblocks:  |      100%|       0%|       0%|       0%|       9
      quantizer:  |      14 |      14 |      14 |      14 |
   filter level:  |       4 |       4 |       4 |       4 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |     343 |       0 |       0 |       0 |     343  (78.3%)

Success
Reduction: -26% (went from 347 bytes to 438 bytes)

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
nice cwebp -metadata none -q 85 -alpha_q '85' -near_lossless 60 -m 6 -low_memory '[doc-root]/app/themes/banks/resources/assets/img/vk.png' -o '[doc-root]/app/webp-express/webp-images/themes/banks/resources/assets/img/vk.png.webp.lossless.webp' 2>&1 2>&1

*Output:* 
nice: cwebp: No such file or directory

Exec failed (return code: 127)
Creating command line options for version: 1.1.0
Trying to convert by executing the following command:
nice /usr/local/bin/cwebp -metadata none -q 85 -alpha_q '85' -near_lossless 60 -m 6 -low_memory '[doc-root]/app/themes/banks/resources/assets/img/vk.png' -o '[doc-root]/app/webp-express/webp-images/themes/banks/resources/assets/img/vk.png.webp.lossless.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]/app/webp-express/webp-images/themes/banks/resources/assets/img/vk.png.webp.lossless.webp'
File:      [doc-root]/app/themes/banks/resources/assets/img/vk.png
Dimension: 45 x 40
Output:    320 bytes (1.42 bpp)
Lossless-ARGB compressed size: 320 bytes
  * Header size: 81 bytes, image data size: 214
  * Lossless features used: PALETTE
  * Precision Bits: histogram=3 transform=3 cache=0
  * Palette size:   7

Success
Reduction: 8% (went from 347 bytes to 320 bytes)

Picking lossless
cwebp succeeded :)

Converted image in 392 ms, reducing file size with 8% (went from 347 bytes to 320 bytes)
