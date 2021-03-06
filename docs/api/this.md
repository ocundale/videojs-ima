<!-- GENERATED FROM SOURCE -->

# this


---

## INDEX

- [METHODS](#methods)
  - [addContentAndAdsEndedListener](#addcontentandadsendedlistener-listener-)
  - [addContentEndedListener](#addcontentendedlistener-listener-)
  - [addEventListener](#addeventlistener-event-callback-)
  - [changeAdTag](#changeadtag-adtag-)
  - [getAdsManager](#getadsmanager)
  - [initializeAdDisplayContainer](#initializeaddisplaycontainer)
  - [localContentEndedListener](#localcontentendedlistener)
  - [pauseAd](#pausead)
  - [playAdBreak](#playadbreak)
  - [requestAds](#requestads)
  - [resumeAd](#resumead)
  - [setAdBreakReadyListener](#setadbreakreadylistener-listener-)
  - [setContent](#setcontent-contentsrc-adtag-playonload-)
  - [setContentWithAdTag](#setcontentwithadtag-contentsrc-adtag-playonload-)
  - [setContentWithAdsResponse](#setcontentwithadsresponse-contentsrc-adsresponse-playonload-)
  - [setShowCountdown](#setshowcountdown-showcountdownin-)
  - [start](#start)
  - [startFromReadyCallback](#startfromreadycallback)

- [PROPERTIES](#properties)
  - [VERSION](#version)
  - [adBreakReadyListener](#adbreakreadylistener)
  - [adDisplayContainerInitialized](#addisplaycontainerinitialized)
  - [adMuted](#admuted)
  - [adPlayheadTracker](#adplayheadtracker)
  - [adPlaying](#adplaying)
  - [adsActive](#adsactive)
  - [adsManagerDimensions](#adsmanagerdimensions)
  - [adsRenderingSettings](#adsrenderingsettings)
  - [allAdsCompleted](#alladscompleted)
  - [contentAndAdsEndedListeners](#contentandadsendedlisteners)
  - [contentComplete](#contentcomplete)
  - [contentEndedListeners](#contentendedlisteners)
  - [contentPlayheadTracker](#contentplayheadtracker)
  - [contentSource](#contentsource)
  - [resizeCheckInterval](#resizecheckinterval)
  - [seekCheckInterval](#seekcheckinterval)
  - [seekThreshold](#seekthreshold)

---

## METHODS

### addContentAndAdsEndedListener( listener )
> Adds a listener that will be called when content and all ads have
> finished playing.

##### PARAMETERS: 
* __listener__ `function` The listener to be called when content and ads complete.

_defined in_: [src/videojs.ima.js#L928](https://github.com/googleads/videojs-ima/blob/master/src/videojs.ima.js#L928)

---

### addContentEndedListener( listener )
> Adds a listener for the 'ended' event of the video player. This should be
> used instead of setting an 'ended' listener directly to ensure that the
> ima can do proper cleanup of the SDK before other event listeners
> are called.

##### PARAMETERS: 
* __listener__ `function` The listener to be called when content completes.

_defined in_: [src/videojs.ima.js#L919](https://github.com/googleads/videojs-ima/blob/master/src/videojs.ima.js#L919)

---

### addEventListener( event, callback )
> Ads an EventListener to the AdsManager. For a list of available events,
> see
> https://developers.google.com/interactive-media-ads/docs/sdks/html5/v3/apis#ima.AdEvent.Type

##### PARAMETERS: 
* __event__ `google.ima.AdEvent.Type` The AdEvent.Type for which to listen.
* __callback__ `function` The method to call when the event is fired.

_defined in_: [src/videojs.ima.js#L810](https://github.com/googleads/videojs-ima/blob/master/src/videojs.ima.js#L810)

---

### changeAdTag( adTag )
> Changes the ad tag. You will need to call requestAds after this method
> for the new ads to be requested.

##### PARAMETERS: 
* __adTag__ `?string` The ad tag to be requested the next time requestAds

_defined in_: [src/videojs.ima.js#L883](https://github.com/googleads/videojs-ima/blob/master/src/videojs.ima.js#L883)

---

### getAdsManager()
> Returns the instance of the AdsManager.

##### RETURNS: 
* `google.ima.AdsManager` The AdsManager being used by the plugin.

_defined in_: [src/videojs.ima.js#L820](https://github.com/googleads/videojs-ima/blob/master/src/videojs.ima.js#L820)

---

### initializeAdDisplayContainer()
> Initializes the AdDisplayContainer. On mobile, this must be done as a
> result of user action.

_defined in_: [src/videojs.ima.js#L206](https://github.com/googleads/videojs-ima/blob/master/src/videojs.ima.js#L206)

---

### localContentEndedListener()
> Local content ended listener for contentComplete.

_defined in_: [src/videojs.ima.js#L1292](https://github.com/googleads/videojs-ima/blob/master/src/videojs.ima.js#L1292)

---

### pauseAd()
> Pauses the ad.

_defined in_: [src/videojs.ima.js#L943](https://github.com/googleads/videojs-ima/blob/master/src/videojs.ima.js#L943)

---

### playAdBreak()
> Called by publishers in manual ad break playback mode to start an ad
> break.

_defined in_: [src/videojs.ima.js#L378](https://github.com/googleads/videojs-ima/blob/master/src/videojs.ima.js#L378)

---

### requestAds()
> Creates the AdsRequest and request ads through the AdsLoader.

_defined in_: [src/videojs.ima.js#L214](https://github.com/googleads/videojs-ima/blob/master/src/videojs.ima.js#L214)

---

### resumeAd()
> Resumes the ad.

_defined in_: [src/videojs.ima.js#L954](https://github.com/googleads/videojs-ima/blob/master/src/videojs.ima.js#L954)

---

### setAdBreakReadyListener( listener )
> Sets the listener to be called to trigger manual ad break playback.

##### PARAMETERS: 
* __listener__ `function` The listener to be called to trigger manual ad break playback.

_defined in_: [src/videojs.ima.js#L936](https://github.com/googleads/videojs-ima/blob/master/src/videojs.ima.js#L936)

---

### setContent( contentSrc, adTag, playOnLoad )
> DEPRECATED: Use setContentWithAdTag.
> Sets the content of the video player. You should use this method instead
> of setting the content src directly to ensure the proper ad tag is
> requested when the video content is loaded.

##### PARAMETERS: 
* __contentSrc__ `?string` The URI for the content to be played. Leave
* __adTag__ `?string` The ad tag to be requested when the content loads.
* __playOnLoad__ `?boolean` True to play the content once it has loaded,

_defined in_: [src/videojs.ima.js#L836](https://github.com/googleads/videojs-ima/blob/master/src/videojs.ima.js#L836)

---

### setContentWithAdTag( contentSrc, adTag, playOnLoad )
> Sets the content of the video player. You should use this method instead
> of setting the content src directly to ensure the proper ad tag is
> requested when the video content is loaded.

##### PARAMETERS: 
* __contentSrc__ `?string` The URI for the content to be played. Leave
* __adTag__ `?string` The ad tag to be requested when the content loads.
* __playOnLoad__ `?boolean` True to play the content once it has loaded,

_defined in_: [src/videojs.ima.js#L854](https://github.com/googleads/videojs-ima/blob/master/src/videojs.ima.js#L854)

---

### setContentWithAdsResponse( contentSrc, adsResponse, playOnLoad )
> Sets the content of the video player. You should use this method instead
> of setting the content src directly to ensure the proper ads response is
> used when the video content is loaded.

##### PARAMETERS: 
* __contentSrc__ `?string` The URI for the content to be played. Leave
* __adsResponse__ `?string` The ads response to be requested when the
* __playOnLoad__ `?boolean` True to play the content once it has loaded,

_defined in_: [src/videojs.ima.js#L871](https://github.com/googleads/videojs-ima/blob/master/src/videojs.ima.js#L871)

---

### setShowCountdown( showCountdownIn )
> Changes the flag to show or hide the ad countdown timer.

##### PARAMETERS: 
* __showCountdownIn__ `boolean` Show or hide the countdown timer.

_defined in_: [src/videojs.ima.js#L1029](https://github.com/googleads/videojs-ima/blob/master/src/videojs.ima.js#L1029)

---

### start()
> DEPRECATED: Use startFromReadyCallback
> Start ad playback, or content video playback in the absence of a
> pre-roll.

_defined in_: [src/videojs.ima.js#L304](https://github.com/googleads/videojs-ima/blob/master/src/videojs.ima.js#L304)

---

### startFromReadyCallback()
> Start ad playback, or content video playback in the absence of a
> pre-roll. **NOTE**: This method only needs to be called if you provide
> your own readyCallback as the second parameter to player.ima(). If you
> only provide options and do not provide your own readyCallback,
> **DO NOT** call this method. If you do provide your own readyCallback,
> you should call this method in the last line of that callback. For more
> info, see this method's usage in our advanced and playlist examples.

_defined in_: [src/videojs.ima.js#L319](https://github.com/googleads/videojs-ima/blob/master/src/videojs.ima.js#L319)

---

## PROPERTIES

### VERSION
> Current plugin version.

_defined in_: [src/videojs.ima.js#L1037](https://github.com/googleads/videojs-ima/blob/master/src/videojs.ima.js#L1037)

---

### adBreakReadyListener
> Listener to be called to trigger manual ad break playback.

_defined in_: [src/videojs.ima.js#L1281](https://github.com/googleads/videojs-ima/blob/master/src/videojs.ima.js#L1281)

---

### adDisplayContainerInitialized
> True if the AdDisplayContainer has been initialized. False otherwise.

_defined in_: [src/videojs.ima.js#L1127](https://github.com/googleads/videojs-ima/blob/master/src/videojs.ima.js#L1127)

---

### adMuted
> True if the ad is muted, false otherwise.

_defined in_: [src/videojs.ima.js#L1185](https://github.com/googleads/videojs-ima/blob/master/src/videojs.ima.js#L1185)

---

### adPlayheadTracker
> Stores data for the ad playhead tracker.

_defined in_: [src/videojs.ima.js#L1245](https://github.com/googleads/videojs-ima/blob/master/src/videojs.ima.js#L1245)

---

### adPlaying
> True if ad is currently playing, false if ad is paused or ads are not
> currently displayed.

_defined in_: [src/videojs.ima.js#L1180](https://github.com/googleads/videojs-ima/blob/master/src/videojs.ima.js#L1180)

---

### adsActive
> True if ads are currently displayed, false otherwise.
> True regardless of ad pause state if an ad is currently being displayed.

_defined in_: [src/videojs.ima.js#L1174](https://github.com/googleads/videojs-ima/blob/master/src/videojs.ima.js#L1174)

---

### adsManagerDimensions
> Stores the dimensions for the ads manager.

_defined in_: [src/videojs.ima.js#L1256](https://github.com/googleads/videojs-ima/blob/master/src/videojs.ima.js#L1256)

---

### adsRenderingSettings
> IMA SDK AdsRenderingSettings.

_defined in_: [src/videojs.ima.js#L1142](https://github.com/googleads/videojs-ima/blob/master/src/videojs.ima.js#L1142)

---

### allAdsCompleted
> True if ALL_ADS_COMPLETED has fired, false until then.

_defined in_: [src/videojs.ima.js#L1195](https://github.com/googleads/videojs-ima/blob/master/src/videojs.ima.js#L1195)

---

### contentAndAdsEndedListeners
> Content and ads ended listeners passed by the publisher to the plugin.
> These will be called when the plugin detects that content *and all
> ads* have completed. This differs from the contentEndedListeners in that
> contentEndedListeners will fire between content ending and a post-roll
> playing, whereas the contentAndAdsEndedListeners will fire after the
> post-roll completes.

_defined in_: [src/videojs.ima.js#L1276](https://github.com/googleads/videojs-ima/blob/master/src/videojs.ima.js#L1276)

---

### contentComplete
> True if our content video has completed, false otherwise.

_defined in_: [src/videojs.ima.js#L1190](https://github.com/googleads/videojs-ima/blob/master/src/videojs.ima.js#L1190)

---

### contentEndedListeners
> Content ended listeners passed by the publisher to the plugin. Publishers
> should allow the plugin to handle content ended to ensure proper support
> of custom ad playback.

_defined in_: [src/videojs.ima.js#L1266](https://github.com/googleads/videojs-ima/blob/master/src/videojs.ima.js#L1266)

---

### contentPlayheadTracker
> Stores data for the content playhead tracker.

_defined in_: [src/videojs.ima.js#L1235](https://github.com/googleads/videojs-ima/blob/master/src/videojs.ima.js#L1235)

---

### contentSource
> Stores the content source so we can re-populate it manually after a
> post-roll on iOS.

_defined in_: [src/videojs.ima.js#L1287](https://github.com/googleads/videojs-ima/blob/master/src/videojs.ima.js#L1287)

---

### resizeCheckInterval
> Interval (ms) to check for player resize for fluid support.

_defined in_: [src/videojs.ima.js#L1221](https://github.com/googleads/videojs-ima/blob/master/src/videojs.ima.js#L1221)

---

### seekCheckInterval
> Interval (ms) on which to check if the user is seeking through the
> content.

_defined in_: [src/videojs.ima.js#L1211](https://github.com/googleads/videojs-ima/blob/master/src/videojs.ima.js#L1211)

---

### seekThreshold
> Threshold by which to judge user seeking. We check every 1000 ms to see
> if the user is seeking. In order for us to decide that they are *not*
> seeking, the content video playhead must only change by 900-1100 ms
> between checks. Any greater change and we assume the user is seeking
> through the video.

_defined in_: [src/videojs.ima.js#L1230](https://github.com/googleads/videojs-ima/blob/master/src/videojs.ima.js#L1230)

---

