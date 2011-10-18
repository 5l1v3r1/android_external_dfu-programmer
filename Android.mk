
LOCAL_PATH:= $(call my-dir)
include $(CLEAR_VARS)

# We only want this apk build for tests.
LOCAL_MODULE_TAGS := eng tests

include $(call all-makefiles-under,$(LOCAL_PATH)/trunk/dfu-programmer/src)
